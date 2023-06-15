<?php
function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <title>Cannahaus.org</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="<?php echo url(); ?>" class="nav__logo">Cannahaus.org</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Startseite</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">&Uuml;ber uns</a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">Leistungsumfang</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Kontakt</a>
                        </li>

                        <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

                <a href="<?php echo url(); ?>registration_form.php" class="button button__header">Jetzt registrieren!</a>
            </nav>
        </header>