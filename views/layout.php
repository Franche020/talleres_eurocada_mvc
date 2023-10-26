<!DOCTYPE html>
<html lang="es">

<head>


    <!-- Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->
    <script defer type="text/javascript" src="/build/js/cookie-consent.js" charset="UTF-8"></script>
    <script defer type="text/javascript" charset="UTF-8">
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
    <script defer type="text/plain" data-cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-JFP148DBM2"></script>
    <script defer type="text/plain" data-cookie-consent="tracking">
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
    <meta name="description" content="Talleres Eurocada tu taller en Torres de la Alameda, realizamos trabajos de chapa, pintura y mecánica. Trabajamos con todas las aseguradoras." />
    <meta name="keywords" content="taller, taller en torres de la alameda, Madrid, chapa y pintura, mantenimiento de vehículos, reparación de vehículos, pintar mi coche"/>
    <meta name="author" content="Francisco J casado - francasadomerino@gmail.com" />
    <meta name="copyright" content="Talleres Eurocada SL Torres de la Alameda Madrid" />
    <meta name="robots" content="index"/>

    <title>Eurocada Taller Torres de la alameda Mecánica Chapa Pintura <?php echo $titulo; ?></title>
    <link rel="icon" type="image/jpg" href="/build/img/favicon.jpg"/>
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