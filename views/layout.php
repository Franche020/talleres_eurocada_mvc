<!DOCTYPE html>
<html lang="en">

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
</script>
    <!-- end of Unnamed script-->

    <noscript>Cookie Consent by <a href="https://www.freeprivacypolicy.com/">Free Privacy Policy Generator</a></noscript>
    <!-- End Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En la Pagina web se muestra informacion del taller de chapa y pintura Eurocada de Torres de la alameda Madrid, así como una calculadora para saber por cuanto dinero puedes pintar tu coche" />
    <meta name="keywords" content="taller, chapa y pintura, pintura, coche, coches, torres, torres de la alameda, madrid, alcalá, alcala, alcalá de henares, alcala de henares, torrejon de ardoz, torrejón de ardoz, loeches, pintar, coche, mantenimiento de vehículos,taller de carrocería, vehículos, chapa, reparación de vehículos, parque europa torrejon "/>
    <meta name="author" content="Francisco J casado - francasadomerino@gmail.com" />
    <meta name="copyright" content="Talleres Eurocada SL Torres de la Alameda Madrid" />
    <meta name="robots" content="index"/>

    <title>Talleres Eurocada <?php echo $titulo; ?> Chapa y Pintura en Torres de la alameda </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
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