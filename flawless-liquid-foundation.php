<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flawless Liquid Foundation</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/1FLAWLESS LIQUID FOUNDATION.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Flawless Liquid Foundation</h1>
                        <h5 class="item_price">$49.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>A long wearing, liquid foundation that instantly delivers a flawless medium to full coverage with a satin matte finish for oily sensitive skin. Available in a range of 6 shades.</p>
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
                <div class="uk-container" uk-grid>
                    <div class="uk-width-3-4">
                        <h4>Description</h4>
                        <p>The Flawless Liquid Foundation instantly provides a smooth and flawless finish but looks and feels like a second skin thanks to natural pigments that act in seamless affinity with the complexion. The oil free and fragrance-free formula is buildable from a medium to flawless coverage, is long wearing and gives the skin an even, satin matte finish. Formulated with good for you natural ingredients, including Bamboo Powder for a soft focus effect, Baobab Fruit Extract, and the antioxidant rich Australian native Kakadu Plum and Lilly Pilly to improve the appearance of the skin, it delivers lasting, flawless coverage with each application. </p>
                        <h4>How to Use</h4>
                        <p>Apply a small amount of Primer as it creates a smooth, even base for make-up application and helps to extend wear.</p>
                        <p>Apply a small amount of the Flawless Liquid Foundation (1 pump) to the back of the hand.</p>
                        <p>Tip: The Flawless Liquid Foundation is fast drying so it’s recommended to apply a small amount of the foundation and blend quickly. Apply and blend foundation with Buffing Brush, using quick circular motions to ensure even application.</p>
                    </div>
                    <div class="uk-width-1-4">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>Long wearing</li>
                            <li>Silky texture without silicones</li>
                            <li>Pigments act in seamless affinity with the complexion</li>
                            <li>Dermatologist tested, suitable for sensitive skin</li>
                            <li>Oil-free and fragrance-free, good for oily sensitive skin</li>
                        <ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>