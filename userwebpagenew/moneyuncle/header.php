<?php

$subDirectory = strpos($_SERVER['HTTP_HOST'], 'localhost') == false ? 'UserWebpage' : '';

?>
<html>
    <head>
    <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=0.67" />
        <link rel="icon" href="favicon.ico" sizes="16x16" type="image/ico" />

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet"
        />
        <!-- CSS Link -->
        <link rel="stylesheet" href="styles/vendor/bootstrap.min.css" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
        />
        <link rel="stylesheet" href="styles/vendor/slick.css" />
        <link rel="stylesheet" href="styles/vendor/slick-theme.css" />
        <link rel="stylesheet" href="styles/vendor/all.css" />
        <link rel="stylesheet" href="styles/css/style.css" />
        <link rel="script" href="js/vendor/jquery-1.12.4.min.js" />

        <title>MoneyUncle</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N689P1TRWR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-N689P1TRWR');
        </script>
    </head>
    <header class="money-uncle-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.svg" alt="logo" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#ad-navbar"
                        aria-controls="ad-navbar"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="ad-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo $subDirectory; ?>#Howitworkscontent">How it works?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/<?php echo $subDirectory; ?>#Downloadappcontent">Download App</a>
                        </li>
                        <li class="nav-item-2">
                            <a class="nav-link" href="https://experts.moneyuncle.com/" target="_blank">For Experts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

