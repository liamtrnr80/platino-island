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
        min-height: calc(100vh - (80px + 40px));
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
            <h3 class="uk-heading-small uk-text-center">#MAKE-UP THAT'S PERFECT FOR YOU</h3>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true">
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                    <li>
                        <div class="uk-panel" width="205px" height="205px">
                            <img src="img/Cactus Flower.jpg" alt="" width="205px"style="border-radius: 50%; height: 205px">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel" width="205px" height="205px">
                            <img src="img/Chamomile-oil-.jpg" alt="" width="205px" style="border-radius: 50%; height: 205px">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel" width="205px" height="205px">
                            <img src="img/Hyaluronic-Acid-.jpg" alt="" width="205px" style="border-radius: 50%; height: 205px">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel" width="205px" height="205px">
                            <img src="img/Jojoba-Beans.jpg" alt="" width="205px" style="border-radius: 50%; height: 205px;">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel" width="205px" height="205px">
                            <img src="img/Olive-extract-.jpg" alt="" width="205px"  style="border-radius: 50%; height: 205px;">
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
        </div>
    </div>

    <!-- <?php include_once('includes/footer.php'); ?> -->

</body>