<?php
 session_start();
 if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--====== Icon Remix  ========-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=====  Css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">


    <title>siteeveryday</title>
</head>

<body>
    <!--==== Header ====-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav-logo">SitesEveryDay</a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">Domů</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link">O mně</a>
                    </li>

                    <li class="nav-item">
                        <a href="#services" class="nav-link">Co nabízím</a>
                    </li>

                    <li class="nav-item">
                        <a href="#skills" class="nav-link">Co umím @ používám</a>
                    </li>


                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontakt</a>
                    </li>
                </ul>

                <i class="ri-close-line nav-close" id="id="nav-close"></i>
            </div>

            <div class="nav-btns">
                <i class="ri-sun-line change-theme" id="theme-toggle"></i>

                <div class="nav-toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    <!--==== Main ====-->
    <main class="main">
        <!--==== Domů ====-->
        <section class="home section" id="home">
            <div class="home-container container grid">
                <div class="home-data">
                    <h1 class="home-title">SitesEveryDay</h1>
                    <h3 class="home-job">Your website, your story</h3>

                    <p class="home-description">SiteEveryDay je místo, kde každý web dostává vlastní příběh.
                        Kreativita, technologie i detail mají u mě svoje místo.
                        Dávám webům osobitost a smysl.
                    </p>


                </div>

                <div class="home-img-wrapper">
                    <img src="assets/img/profile1.png" alt="" class="home-img">
                </div>

                <div class="home-social grid">
                    <a href="https://www.linkedin.com/" target="_blank" class="home-social-link">
                        <i class="ri-linkedin-fill"></i>
                    </a>

                    <a href="https://www.instagram.com/lukyzverina/?hl=cs" target="_blank" class="home-social-link">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://github.com/Lukas33K" target="_blank" class="home-social-link">
                        <i class="ri-github-fill"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--==== O mně ====-->
        <section class="about section" id="about">
            <div class="about-container container grid">
                <div class="about-experience">
                    <span class="about-no"><count-up>15</count-up></span>
                    <h3 class="about-title">
                        Dokončených<br />
                        Projektů
                    </h3>
                </div>

                <div>
                    <h2 class="about-description">
                        Spojuji <span class="text-gradient">technické znalosti a cit pro design.</span>
                        <span class="text-gradient">Stavím projekty na pevných základech</span> s moderním vizuálem,
                        <span class="text-gradient">který funguje</span> i dobře vypadá.
                    </h2>

                </div>

                <ul class="about-data grid">
                    <li class="about-item">
                        <h3 class="about-item-no"><count-up>12</count-up></h3>
                        <p class="about-details">core stack tools</p>
                    </li>

                    <li class="about-item">
                        <h3 class="about-item-no"><count-up>1000+</count-up></h3>
                        <p class="about-details">hours coding</p>
                    </li>

                    <li class="about-item">
                        <h3 class="about-item-no"><count-up>5+</count-up></h3>
                        <p class="about-details">years technical experience</p>
                    </li>
                </ul>
            </div>
        </section>

        <!--==== Nabídka ====-->
        <section class="service section" id="services">
            <h2 class="section-title">Co nabízím</h2>

            <div class="services-container container grid">
                <article class="services-card">
                    <span class="services-no"><i class="ri-global-fill"></i></span>
                    <h3 class="services-title">Moderní weby</h3>
                    <p class="services-description">Tvořím přehledné a responzivní webové stránky pomocí HTML, CSS a
                        JavaScriptu, které fungují správně na všech zařízeních.</p>
                </article>

                <article class="services-card">
                    <span class="services-no"><i class="ri-code-box-fill"></i></span>
                    <h3 class="services-title">Práce s PHP
                    </h3>
                    <p class="services-description">Pracuji s PHP a databázemi, tvořím vlastní funkce, napojuji MySQL a
                        vytvářím kompletní logiku pro webové aplikace.</p>
                </article>

                <article class="services-card">
                    <span class="services-no"><i class="ri-database-2-fill"></i></span>
                    <h3 class="services-title">Propojení a formuláře</h3>
                    <p class="services-description">Napojím web na kontaktní formulář, nastavím odesílání e-mailů a
                        jednoduché propojení s dalšími službami pomocí API.</p>
                </article>
            </div>
        </section>
        </section>
        <!--==== Co umím ====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Nástroje & frameworky</h2>

            <div class="skills-container container grid">
                <div class="skills-group skills-developer">
                    <h3 class="skills-title">My Tools</h3>

                    <div class="skills-items grid">
                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/html-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">HTML</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/css-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">CSS</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/javascript-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">JavaScript</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/tailwind-css-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">Tailwind</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/php2.png" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">PHP</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/Laravel.png" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">Laravel</h3>
                            <span class="skills-level"></span>
                        </div>
                    </div>
                </div>

                <div class="skills-group skills-designer">
                    <h3 class="skills-title">Web Design</h3>

                    <div class="skills-items grid">
                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/figma-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">Figma</h3>
                            <span class="skills-level"></span>
                        </div>


                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/adobe-xd-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">Adobe XD</h3>
                            <span class="skills-level"></span>
                        </div>

                        <div class="skills-data">
                            <div class="skills-blob">
                                <img src="assets/img/adobe-photoshop-logo.svg" alt="" class="skills-img">
                            </div>

                            <h3 class="skills-name">Photoshop</h3>
                            <span class="skills-level"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==== Resume ====-->
        <section class="resume section">
            <h2 class="section-title">Můj příběh</h2>

            <div class="resume-container container grid">
                <div class="resume-item grid">
                    <div class="resume-left">
                        <i class="ri-code-block resume-icon"></i>
                        <h3 class="resume-title">Junior programátor</h3>
                        <span class="resume-duration">2025 - současnost</span>
                    </div>
                    <div class="resume-right">
                        <h3 class="resume-title">Freelancer / osobní projekty</h3>
                        <p class="resume-description">Vývoj a správa menších webových aplikací, tvorba vlastního
                            portfolia a první zakázky v PHP, HTML, CSS, JavaScript. Neustále se vzdělávám a posouvám dál
                            v praxi.</p>
                    </div>
                </div>

                <div class="resume-item grid">
                    <div class="resume-right">
                        <i class="ri-graduation-cap-fill resume-icon"></i>
                        <h3 class="resume-title">Rekvalifikační kurz programování</h3>
                        <span class="resume-duration">2025</span>
                    </div>
                    <div class="resume-left">
                        <h3 class="resume-title">PHP, HTML, CSS, základy JavaScriptu a databází</h3>
                        <p class="resume-description">Absolvoval jsem intenzivní kurz zaměřený na tvorbu webových
                            stránek, backend a práci s databází. Naučil jsem se také základy frameworku Laravel.</p>
                    </div>
                </div>

                <div class="resume-item grid">
                    <div class="resume-left">
                        <i class="ri-lightbulb-flash-fill resume-icon"></i>
                        <h3 class="resume-title">Elektro technik v zahraničí</h3>
                        <span class="resume-duration">2019 - 2025</span>
                    </div>
                    <div class="resume-right">
                        <h3 class="resume-title">Německo, Nizozemsko, Turecko</h3>
                        <p class="resume-description">Pracoval jsem na různých projektech v oblasti elektroinstalací,
                            automatizace a výrobních linek. Získal jsem zkušenosti nejen s prací v mezinárodním týmu,
                            ale i s datovými technologiemi - například instalací datových rozvaděčů, rozvodem
                            strukturované kabeláže a dalšími činnostmi v oblasti datových sítí.</p>
                    </div>
                </div>
            </div>
        </section>

        </section>
        <!--==== Kontakt ====-->
        <section class="contact section" id="contact">
            <div class="contact-container container grid">
                <div class="contact-group">
                    <h2 class="section-title contact-section-title">Váš projekt<br>začíná Tady!</h2>

                    <div class="contact-data grid">
                        <div class="contact-item">
                            <span class="contact-icon">
                                <i class="ri-mail-send-fill"></i>
                            </span>

                            <div>
                                <h3 class="contact-title">E-mail</h3>
                                <p class="contact-description">SitesEveryDays@gmail.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <span class="contact-icon">
                                <i class="ri-phone-fill"></i>
                            </span>

                            <div>
                                <h3 class="contact-title">Telefon</h3>
                                <p class="contact-description">+420 605 134 513</p>
                            </div>
                        </div>


                    </div>
                </div>

                <form class="contact-form grid" id="contact-form">
                    <div class="contact-form-div">
                        <label for="" class="contact-label">Jméno</label>
                        <input type="Jméno" name="name" class="contact-input" id="contact-name">
                    </div>

                    <div class="contact-form-div">
                        <label for="" class="contact-label">E-mail</label>
                        <input type="E-mail" name="email" class="contact-input" id="contact-email">
                    </div>

                    <div class="contact-form-div">
                        <label for="" class="contact-label">Zpráva</label>
                        <textarea name="Zpráva" name="message" class="contact-input contact-area" id="contact-message"></textarea>
                    </div>

                    <button type="submit" class="button contact-button">Odeslat zprávu</button>

                    <p class="contact-message" id="message"></p>
                </form>
            </div>
        </section>  
    </main>
    <!--==== Footer ====-->
    <footer class="footer">
        <div class="footer-container container">
              <div class="footer-social ">
                    <a href="https://www.linkedin.com/" target="_blank" class="footer-link">
                        <i class="ri-linkedin-fill"></i>
                    </a>

                    <a href="https://www.instagram.com/lukyzverina/?hl=cs" target="_blank" class="footer-link">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="https://github.com/Lukas33K" target="_blank" class="footer-link">
                        <i class="ri-github-fill"></i>
                    </a>
                </div>

                <p class="footer-copyright">Your website, your story.</p>

        </div>
    </footer>

    <!--==== GSap ====-->

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

    <!--==== CountUP ====-->

    <script type="module"
        src="https://cdn.jsdelivr.net/gh/lekoala/formidable-elements@master/dist/count-up.min.js"></script>

    <!--==== MixitUP ====-->

    <!--==== Email JavaScript ====-->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>

    <!--==== ScrollReveal ====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--====== Hlavní JavaScript ======-->
    <script src="assets/js/main.js"></script>
</body>

</html>