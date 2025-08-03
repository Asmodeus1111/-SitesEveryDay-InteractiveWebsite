<?php
session_start();

// Výpis chyb pro debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Povolení pouze POST metody
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Neplatný požadavek');
}

// Ověření CSRF tokenu
if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
    exit('Neplatný CSRF token!');
}

// Honeypot ochrana proti botům (pole 'website' musí být prázdné)
if (!empty($_POST['website'])) {
    exit('Neplatný požadavek');
}

// Funkce pro očištění vstupů
function clean_input($data) {
    return trim(htmlspecialchars($data, ENT_QUOTES, 'UTF-8'));
}

// Získání a validace dat
$name    = clean_input($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL) ? clean_input($_POST['email']) : '';
$subject = clean_input($_POST['subject'] ?? '');
$message = clean_input($_POST['message'] ?? '');

if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    exit('Jméno musí mít 2-100 znaků.');
}
if (!$email || mb_strlen($email) > 100) {
    exit('Zadejte platný email.');
}
if (mb_strlen($subject) < 2 || mb_strlen($subject) > 100) {
    exit('Předmět musí mít 2-100 znaků.');
}
if (mb_strlen($message) < 10 || mb_strlen($message) > 2000) {
    exit('Zpráva musí mít 10-2000 znaků.');
}

// Omez opakované odeslání (rate limiting na session)
if (!isset($_SESSION['last_submit'])) {
    $_SESSION['last_submit'] = 0;
}
if (time() - $_SESSION['last_submit'] < 30) {
    exit('Zprávu lze odeslat maximálně jednou za 30 sekund.');
}

// Připojení k databázi
$servername = "localhost";
$username   = "siteseverydaycz";
$password   = "Zelvicka939";
$dbname     = "mojeprvnidatabaze";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    exit('Chyba připojení k databázi: ' . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// Uložení zprávy do databáze (prepared statement)
$stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
if (!$stmt) exit('Chyba databáze: ' . $conn->error);

// Spojíme předmět a zprávu, aby se vše uložilo (pokud chceš subject do DB, uprav tabulku)
$full_message = "Předmět: $subject\n\n$message";
$stmt->bind_param("sss", $name, $email, $full_message);

if ($stmt->execute()) {
    $_SESSION['last_submit'] = time();
    echo "Zpráva byla úspěšně odeslána!<br><br>";
    echo '<a href="/index.php" style="color:#fff; background:#f97316; padding:10px 25px; border-radius:6px; text-decoration:none;">Zpět na hlavní stránku</a>';
} else {
    echo "Chyba při odesílání zprávy: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>