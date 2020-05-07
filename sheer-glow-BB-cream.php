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
                    <div>
                        <h1>Sheer Glow BB Cream</h1>
                        <h4>$20.00</h4>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p> The Sheer Glow BB Cream instantly enhances the complexion, providing light coverage to even out skin tone, minimise the appearance of fine lines and imperfections for a natural, luminous finish with SPF 20 protection.</p>
                                    <p>The all-in-one formula contains active natural ingredients, including Phytomoist and the native Australian Kakadu Plum known for its abundant Vitamin C content, Quandong and Desert Lime to help fight visible signs of ageing. The lightweight, non-greasy texture is enriched with moisturising Aloe Vera and Desert Date Oil to benefit the skin and perfect the complexion. </p>
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
                <h3>How to Use</h3>
                    <p>Apply a small amount over face and neck. Try not to rub, blend using a patting motion.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>
