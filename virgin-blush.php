<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIRGIN BLUSH</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/9VIRGIN BLUSH.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Virgin Blush</h1>
                        <h5 class="item_price">$29.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>The Virgin Blush is concentrated with highly pigmented light-reflecting micro particles that blend naturally into the skin, leaving a soft sheen finish. The feather-light formula brings a touch of colour while maintaining its glow throughout the day. The powder is composed of performing active natural ingredients including Jojoba Esters known for their nourishing properties.</p>
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
                            <li>Easy to blend</li>
                            <li>skin nourishing ingredients </li>
                            <li>Neutral bronze shade to suit all skin tones</li>
                            <li>Fragrance-free</li>
                        <ul>
                    </div>
                    <div>
                    <h3>How to use</h3>
                    <p>Use the Angled Blush Brush to apply a small amount of Virgin Blush along the cheekbones and down to the jawline. Build as desired, using a small amount of product at a time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>