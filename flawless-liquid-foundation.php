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
                    <div>
                        <h1>Flawless Liquid Foundation</h1>
                        <h4>$20.00</h4>
                        <?php include_once("includes/product-buy.php"); ?>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>The Flawless Liquid Foundation instantly provides a smooth and flawless finish but looks and feels like a second skin thanks to natural pigments that act in seamless affinity with the complexion. The oil free and fragrance-free formula is buildable from a medium to flawless coverage, is long wearing and gives the skin an even, satin matte finish. Formulated with good for you natural ingredients, including Bamboo Powder for a soft focus effect, Baobab Fruit Extract, and the antioxidant rich Australian native Kakadu Plum and Lilly Pilly to improve the appearance of the skin, it delivers lasting, flawless coverage with each application. </p>
                                </div>
                            </li>
                            <li>
                                <a class="uk-accordion-title" href="#">Return & Refund Policy</a>
                                <div class="uk-accordion-content">
                                    <p>>I’m a Return and Refund policy. I’m a great place to let your customers know what to do in case they are dissatisfied 
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
                    <p>Apply a small amount of Primer as it creates a smooth, even base for make-up application and helps to extend wear.</p>
                    <p>Apply a small amount of the Flawless Liquid Foundation (1 pump) to the back of the hand.</p>
                    <p>Tip: The Flawless Liquid Foundation is fast drying so it’s recommended to apply a small amount of the foundation and blend quickly.</p>
                    <p>Apply and blend foundation with Buffing Brush, using quick circular motions to ensure even application.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>