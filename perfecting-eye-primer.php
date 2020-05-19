<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfecting Eye Primer</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/11 PERFECTING EYE PRIMER.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Perfecting Eye Primer</h1>
                        <h5 class="item_price">$22.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>A silicone-free eye primer that tightens and smooths to create an even base for eye make-up application.</p>
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
                        <p>The Perfecting Eye Primer smooths skin and creates an even base for eye make-up application. The untinted formula blends seamlessly into the skin and dries on invisibly. It helps tighten the skin in the eye area and smooth the appearance of wrinkles while helping to extend eye make-up wear. The primer is enriched with an Oat derived anti-aging ingredient known for its tightening and anti-wrinkle properties, as well as a natural powder derived from Carnauba Wax to help keep make-up in place for an extended wear.</p>
                        <h4>How to Use</h4>
                        <p>Use fingertips or Base Shadow Brush to apply the Perfecting Eye Primer onto the eyelid.</p>                    
                    </div>
                    <div class="uk-width-1-4">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>Creates an even base for eye make-up</li>
                            <li>Anti-ageing ingredients</li>
                            <li>Smooths skin without silicones</li>
                            <li>Helps smooth appearance of wrinkles</li>
                            <li>Fragrence-free</li>
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