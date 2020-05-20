<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organic Wear Silk Foundation</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/3ORGANIC WEAR SILK FOUNDATION.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Organic Wear Silk Foundation</h1>
                        <h5 class="item_price">$49.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p> An ultra-nourishing, ultra-fluid, weightless, organic Foundation Elixir that improves the appearance of skin tone and texture while delivering a sheer-to-buildable coverage. </p>
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
                        <p>Features Organic Jojoba Oil, Organic Aloe Vera, Organic Coconut Oil and Botanical Cactus Flower to lock in moisture, improve the appearance of skin tone and deliver a second-skin, airbrushed dewy finish. Especially good for combination sensitive skin.</p>
                        <h4>How to Use</h4>
                        <p>Shake bottle before each use. Apply a small amount of Primer as it creates a smooth, even base for make-up application and helps to extend wear.</p>
                        <p>Apply a small amount of the Flawless Liquid Foundation (1 pump) to the back of the hand.</p>
                    </div>
                    <div class="uk-width-1-4">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>Hypoallergenic</li>
                            <li>Fragrance-Free</li>
                            <li>Paraben-Free</li>
                            <li>Gluten Free</li>
                            <li>Dermatologist Approved</li>
                            <li>Clinically Tested</li>
                            <li>Cruelty Free</li>
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
