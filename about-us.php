<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height" style="padding: 5vh 2vw;">
        <h1 class="uk-heading uk-text-center">About Us</h1>
        <div class="uk-section-default">
            <div class="uk-section uk-background-cover" style="background-image: url(img/about-us-back.jpg">
                <div class="uk-container">
                    <img class="uk-align-right uk-margin-remove-adjacent" src="img/about-us-img.jpeg" width="500" height="1000">
                    <p>PLATINO ISLAND is a new brand created in 2020 in Melbourne, focusing on sensitive skin cosmetics. Cosmetics was also becoming increasingly importatn, however whilst people with sensitive skin were trying to avoid toxins and harsh chemicals during their make-up routine, they weren't spending the same energy selecting the best make-up. But don't worry, PLATINO ISLAND prepares you 100% natural ingredients make-up solutions without unnecessary chemicals, synthetic ingredients or preservatives often found in cosmetics.</p>
                    <p>Healthy skin starts with healthy ingredients. We've foraged the world for the safest organic ingredients screened in our labs by our scientists and doctors to slect those that are clean, effective, and high-performing, yet gentle on the sensitive skin.</p>
                    <p>PLATINO ISLAND is perfect for your sensitive skin inside and out.</p>
                    <p>Team Optimal Bears</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>