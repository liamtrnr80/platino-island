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

                <div class="uk-position-bottom-center uk-postion-small">
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

        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>