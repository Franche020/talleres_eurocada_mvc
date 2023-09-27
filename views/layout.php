<!DOCTYPE html>
<html lang="es">

<head>


    <!-- Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->
    <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "implied",
                "palette": "light",
                "language": "es",
                "page_load_consent_levels": ["strictly-necessary", "functionality", "tracking", "targeting"],
                "notice_banner_reject_button_hide": false,
                "preferences_center_close_button_hide": false,
                "page_refresh_confirmation_buttons": false
            });
        });
    </script>

    <!-- Unnamed script -->
    <script type="text/plain" data-cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-JFP148DBM2"></script>
    <script type="text/plain" data-cookie-consent="tracking">
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JFP148DBM2');
    //Cookie Consent by <a href="https://www.freeprivacypolicy.com/">Free Privacy Policy Generator</a>
    </script>
    <!-- end of Unnamed script-->

    <!-- End Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Talleres Eurocada tu taller en Torres de la Alameda, realizamos trabajos de chapa, pintura y mecánica" />
    <meta name="keywords" content="taller, torres de la alameda, madrid, chapa y pintura, pintura, coche, coches, alcalá de henares,  torrejón de ardoz, loeches, pinturar, coche, mantenimiento de vehículos,taller de carrocería, vehículos, chapa, reparación de vehículos "/>
    <meta name="author" content="Francisco J casado - francasadomerino@gmail.com" />
    <meta name="copyright" content="Talleres Eurocada SL Torres de la Alameda Madrid" />
    <meta name="robots" content="index"/>

    <title>Talleres Eurocada - Torres de la alameda - Mecánica Chapa Pintura -<?php echo $titulo; ?></title>
    <link rel="icon" type="image/jpg" href="/build/img/favicon.jpg"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">

</head>

<body>
    <?php
    include_once __DIR__ . '/templates/header.php';
    echo $contenido;
    include_once __DIR__ . '/templates/footer.php';
    ?>
    <?php echo $script  ?? '' ?>
    <script src="/build/js/burger.js" defer></script>
</body>

</html>