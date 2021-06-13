<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google API -->
    <meta name="google-signin-client_id" content="166145593733-e55n2qulup3q6kgmnmbgttqfvtg0voai.apps.googleusercontent.com.apps.googleusercontent.com">

    <title>Store</title>

    <!-- Embed Configs -->
    <meta property="og:title" content="Store" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://wallpaperaccess.com/full/436659.jpg" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.co.uk/">

    <meta name="og:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
    <meta name="keywords" content="Destiny2, Recoveries, Services, Boosting, Hiring">
    <meta name="theme-color" content="#161B2F">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="example.co.uk">
    <meta property="twitter:url" content="https://example.co.uk">
    <meta name="twitter:title" content="example">
    <meta name="twitter:description" content="The best place for Destiny 2 account recoveries, boosting and services.">
    <meta name="twitter:image" content="https://wallpaperaccess.com/full/436659.jpg">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/viewports.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="https://surge-networks.co.uk/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/curr-selector.css">
    <!-- <link rel="stylesheet" href="assets/css/nav.css"> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
</head>

<img class="imageFadeToBottom bg" src="images/nessus1.png">

<body class="animation">

    <div class="main">
        <div class="container">

            <?php require "./modules/fadeIn.php"; ?>
            <?php require "./modules/currencySelection.php" ?>
            <?php require "_partials/navbar.php"; ?>

            <div class="mid">

                <h1 style="color:white">Sitemap Overview</h1>

                <?php
                $q = $_GET['q'];

                if ($q) {

                    foreach (scandir('.') as $fileName) {
                        if (str_contains($fileName, ".php")) {

                            $fileName2 = str_replace(".php", "", $fileName);
                            $file = ucfirst($fileName2);

                            if (str_contains($file, $q) || str_contains($fileName, $q) || str_contains($fileName2, $q)) {

                                echo '
                                <li style="padding: 8px; color: black">
                                    <a style="color: gray" href="' . $fileName2 . '">' . $file . '</a>
                                </li>
                                ';
                            }
                        }
                    }
                } else {

                    foreach (scandir('.') as $fileName) {
                        if (str_contains($fileName, ".php")) {

                            $fileName2 = str_replace(".php", "", $fileName);
                            $file = ucfirst($fileName2);

                            echo '
                                <li style="padding: 8px; color: black">
                                    <a style="color: gray" href="' . $fileName2 . '">' . $file . '</a>
                                </li>
                                ';
                        }
                    }
                    //
                }

                ?>

            </div>

            <?php require "_partials/footer.php"; ?>

        </div>
    </div>

    <script src="assets/js/currency-selector.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <!-- <script src="https://cdn.surge-networks.co.uk/assets/javascript/SmoothScroll.js"></script> -->
    <noscript>Uh Oh! Sorry, it seems your web browser doesn't use JavaScript, This website won't work as normal. Please use another web browser or try again later...</noscript>

</body>