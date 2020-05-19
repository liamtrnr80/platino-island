<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flawless Concealer</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section" style="padding-bottom:0px;">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/7 FLAWLESS CONCEALER.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Flawless Concealer</h1>
                        <h5 class="item_price">$32.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>The Flawless Concealer expertly camouflages dark circles and imperfections but looks and feels like a second skin thanks to natural pigments that act in seamless affinity with the complexion. The creamy full coverage formula offers a satin matte finish, is long wearing, and comes in an easy-to-use stick that delivers just the right amount of product. Formulated with good for you natural ingredients, including Bamboo Powder for a soft focus effect, Baobab Fruit Extract, and the antioxidant rich Australian native Kakadu Plum and Quandong to benefit the skin, it delivers lasting, flawless coverage with each application.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Return & Refund Policy</a>
                                <div class="uk-accordion-content">
                                    <p>I’m a Return and Refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied 
                                    with their purchase. Having a straightforward refund or exchange policy is a great way to build trust and reassure your 
                                    customers that they can buy with confidence.</p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Shipping Information</a>
                                <div class="uk-accordion-content">
                                    <p>I'm a shipping policy. I'm a great place to add more information about your shipping methods, packaging and cost. 
                                    Providing straightforward information about your shipping policy is a great way to build trust and reassure your customers 
                                    that they can buy from you with confidence.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-container">
                    <div class="uk-align-right">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>Long wearing</li>
                            <li>Pigments act in seamless affinity with the complexation </li>
                            <li>Easy-to-use stick format</li>
                            <li>Fragrance-free</li>
                        <ul>
                    </div>
                    <div>
                    <h3>How to use</h3>
                    <p>UApply the Flawless Concealer directly to the skin to camouflage imperfections, and blend seamlessly with fingertips or Concealer Brush until full, even coverage is achieved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>