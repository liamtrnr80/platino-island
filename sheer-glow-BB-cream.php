<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sheer Glow BB Cream</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/4SHEER GLOW BB CREAM.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Sheer Glow BB Cream</h1>
                        <h5 class="item_price">$49.95</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>An all-in-one BB cream that delivers sheer to light coverage with luminous, natural finish and SPF 20. Good for all types of sensitive skin.</p>
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
                        <p> The Sheer Glow BB Cream instantly enhances the complexion, providing light coverage to even out skin tone, minimise the appearance of fine lines and imperfections for a natural, luminous finish with SPF 20 protection.</p>
                        <p>The all-in-one formula contains active natural ingredients, including Phytomoist and the native Australian Kakadu Plum known for its abundant Vitamin C content, Quandong and Desert Lime to help fight visible signs of ageing. The lightweight, non-greasy texture is enriched with moisturising Aloe Vera and Desert Date Oil to benefit the skin and perfect the complexion. </p>
                        <h4>How to Use</h4>
                        <p>Apply a small amount over face and neck. Try not to rub, blend using a patting motion.</p>
                    </div>
                    <div class="uk-width-1-4">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>SPF 20 protection</li>
                            <li>Silky texture without silicones</li>
                            <li>Moisturising ingredients</li>
                            <li>Dermatologist tested, suitable for sensitive skin</li>
                            <li>Helps fight visible signs of ageing</li>
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
