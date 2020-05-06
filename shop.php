<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-panel uk-margin-medium uk-text-center">
                <h2>Shop</h2>
            </div>
            
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <a href="flawless-liquid-foundation.php" class="uk-display-block uk-card uk-card-default uk-link-toggle">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="img/1FLAWLESS LIQUID FOUNDATION.jpg" alt="" width="250" height="250">
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-small">Flawless Liquid Foundation</div>
                        <div class="uk-text-meta">$20.00</div>
                    </div>
                </a>

                <a href="flawless-liquid-foundation.php" class="uk-display-block uk-card uk-card-default uk-link-toggle">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="img/2LUMINOUS SHEER LIQUID FOUNDATION.jpg" alt="" width="250" height="250">
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-small">Luminous Sheer Liquid Foundation</div>
                        <div class="uk-text-meta">$20.00</div>
                    </div>
                </a>

                <a href="flawless-liquid-foundation.php" class="uk-display-block uk-card uk-card-default uk-link-toggle">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="img/3ORGANIC WEAR SILK FOUNDATION.jpg" alt="" width="250" height="250">
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-small">Organic Wear Silk Foundation</div>
                        <div class="uk-text-meta">$20.00</div>
                    </div>
                </a>

                <a href="flawless-liquid-foundation.php" class="uk-display-block uk-card uk-card-default uk-link-toggle">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="img/4SHEER GLOW BB CREAM.jpg" alt="" width="250" height="250">
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-small">Sheer Glob BB Cream</div>
                        <div class="uk-text-meta">$20.00</div>
                    </div>
                </a>

                <a href="flawless-liquid-foundation.php" class="uk-display-block uk-card uk-card-default uk-link-toggle">
                    <div class="uk-card-media-top">
                        <img class="uk-align-center" src="img/5NATURAL MINERAL COVER FOUNDATION.jpg" alt="" width="250" height="250">
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-small">Natural Mineral Cover Foundation</div>
                        <div class="uk-text-meta">$20.00</div>
                    </div>
                </a>
            </div>
        </div>        
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>