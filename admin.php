<?php
session_start();

// Uživatelské jméno a heslo
$ADMIN_USER = "admin";
$ADMIN_PASS = "Zelvicka939";

// Odhlášení
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit();
}

// Kontrola přihlášení
if (!isset($_SESSION['admin_logged_in'])) {
    // Kontrola login formuláře
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === $ADMIN_USER && $_POST['password'] === $ADMIN_PASS) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: admin.php");
            exit();
        } else {
            $error = "Špatné jméno nebo heslo!";
        }
    }

    // Formulář pro přihlášení
    echo '<!DOCTYPE html><html><head>
    <meta charset="UTF-8"><title>Přihlášení do administrace</title>
    <style>
    body { background: #f8fafc; font-family: Arial; }
    .login-box { max-width: 340px; margin: 80px auto; padding: 30px 25px; background: #fff; border-radius: 12px; box-shadow: 0 2px 14px rgba(0,0,0,0.10);}
    .login-box h2 { color: #f97316; margin-bottom: 18px;}
    .login-box input[type=text], .login-box input[type=password] { width:100%; padding:10px; margin:8px 0; border:1px solid #ddd; border-radius:6px;}
    .login-box button { width:100%; background:#f97316; color:#fff; padding:11px 0; border:none; border-radius:6px; font-size:15px; margin-top:10px;}
    .error { color:#b91c1c; margin:8px 0;}
    </style>
    </head><body><div class="login-box">
    <h2>Admin přihlášení</h2>';
    if (!empty($error)) echo '<div class="error">'.$error.'</div>';
    echo '<form method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno" autocomplete="off" required>
        <input type="password" name="password" placeholder="Heslo" autocomplete="off" required>
        <button type="submit">Přihlásit se</button>
    </form>
    </div></body></html>';
    exit();
}

// Výpis chyb pro debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

// MAZÁNÍ zprávy (GET parametr delete)
if (isset($_GET['delete'])) {
    $delete_id = intval($_GET['delete']);
    $conn->query("DELETE FROM messages WHERE id=$delete_id LIMIT 1");
    // Přesměruj zpět, aby neprobíhalo znovu při reloadu
    header("Location: admin.php");
    exit();
}

// Získání všech zpráv
$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!-- Admin stylizace pod unikátní třídou -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<div class="admin-messages">
</a>
    </a>
    <h2>Přijaté zprávy</h2>
    <div class="logout-box">
  <a href="admin.php?logout=1" class="logout-btn">
    <i class="fas fa-sign-out-alt"></i>
    Odhlásit se
  </a>
</div>

    <?php
    if ($result && $result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Jméno</th>
                    <th>Email</th>
                    <th>Zpráva</th>
                    <th>Datum</th>
                    <th>Akce</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".htmlspecialchars($row['id'])."</td>
                    <td>".htmlspecialchars($row['name'])."</td>
                    <td>".htmlspecialchars($row['email'])."</td>
                    <td style='max-width:300px;white-space:pre-wrap;'>".nl2br(htmlspecialchars($row['message']))."</td>
                    <td>".htmlspecialchars($row['created_at'])."</td>
                    <td>
                        <form method='get' onsubmit=\"return confirm('Opravdu smazat tuto zprávu?');\" style='display:inline;'>
                            <input type='hidden' name='delete' value='".htmlspecialchars($row['id'])."'>
                            <button type='submit' class='delete-btn'>Smazat</button>
                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Žádné zprávy nenalezeny.</p>";
    }
    ?>
</div>
