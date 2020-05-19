<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platino Island</title>
    <?php include_once('includes/header.php'); ?>
</head>
<style>
    .full-height {
        min-height: calc(100vh - (100px + 40px));
}
</style>
<body>
    <?php include_once('includes/nav.php'); ?>
    
    <div class="uk-container full-height">
        <h1 class="uk-heading-large uk-text-center">PLATINO ISLAND</h1>
        <div class="uk-container">
            <div class="uk-position-relative uk-light" uk-slideshow="autoplay: true">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="img/Main1.jpeg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="img/Main2.jpeg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="img/Main3.jpeg" alt="" uk-cover>
                    </li>
                </ul>

                <div class="uk-position-bottom-center uk-postion-small" style="padding-bottom:10px;">
                    <ul class="uk-dotnav">
                        <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                        <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                        <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                    </ul>
                </div>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
        </div>
        <div class="container">
            <p></p>
            <h3 class="uk-heading-small uk-text-center">#MAKE-UP THAT'S PERFECT FOR YOU</h3>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true">
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Cactus Flower.jpg">
                            <!-- <img src="img/Cactus Flower.jpg" alt="" width="205px"style="border-radius: 50%; height: 205px"> -->
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Chamomile-oil-.jpg" style="height: 205;">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Hyaluronic-Acid-.jpg" style="height: 205;">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Jojoba-Beans.jpg">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Olive-extract-.jpg" style="height: 205;">
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>

            <div class="uk-text-center" style="padding: 10px 0px;">
                Our promise is natural formulas that are high-performing and perfect for you.
                Platino Island is more than cosmetic. It's amazing, from the inside out.
            </div>
        
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>