<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="referrer" content="origin-when-cross-origin" />
        <link rel="apple-touch-icon" href="">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#0c101b">
        <meta name="apple-mobile-web-app-title" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

        <base href="" />

        <meta name="robots" content="noodp"/>
        <link rel="canonical" href="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content=""/>
        <meta name="twitter:image" content=""/>
        <meta property="og:image" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="description" content="fast foundation description" />
        <meta name="og:description" content="" />
        <meta name="twitter:description" content="" />
        <meta name="author" content=""/>
        <meta name="twitter:card" content="photo" />
        <meta name="twitter:site" content="" />
        <link rel="shortcut icon" href="assets/img/favicon-32x32.png"/>
        <link rel="icon" sizes="512x512" href="assets/img/favicon-32x32.png"/>
        <link rel="manifest" href="manifest.json"/>
        <meta name="theme-color" content="#0c101b"/>
        <title>Page Title</title>
        <meta name="keywords" content=""/>
        <style>
            <?php require "assets/css/top.css";?>
        </style>
    </head>
    <body>
        <link rel="stylesheet" href="assets/css/libs.css.php" />
        <link rel="stylesheet" href="assets/css/app.css">

        <?php require("templates/header.php"); ?>

        <main>
            <?php require("templates/".$_GET["p"].".php"); ?>
        </main>

        <?php require("templates/footer.php"); ?>

        <link rel="stylesheet" href="assets/css/bottom.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script async defer src="assets/js/libs.js.php"></script>

        <script async src="assets/js/main.js"></script>

    </body>
</html>

<!--        <link rel="stylesheet" href="assets/css/app.css" media="none" onload="if(media!='all')media='all'">-->
<!--        <noscript><link rel="stylesheet" href="assets/css/app.css"></noscript>-->