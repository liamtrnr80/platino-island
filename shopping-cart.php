<?php
session_start()
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>
    
    <div class="uk-container full-height">
        <div class="uk-section">  
            <div class="uk-container">
                <div class="uk-panel uk-margin-medium uk-text-center">
                    <h2>Shopping Cart</h2>
                </div>

                <div class="uk-container" uk-grid>
                    <div class=uk-width-3-4>
                        <h3>My Bag - <span class="simpleCart_quantity"></span> Item(s)</h3>
                    </div>
                    <div class="uk-width-1-4">
                        <a href="checkout.php" class="uk-button uk-button-default">Proceed to Checkout</a>
                    </div>
                </div>

                <div class="simpleCart_items uk-table"></div>
                <hr>

                <div class="uk-container" uk-grid>
                    <div class="uk-width-3-4">
                    </div>
                    <div class="uk-width-1-4">
                        <strong>Subtotal (GST incl): </strong><span class="simpleCart_grandTotal"></span>
                        <strong>Shipping: </strong><span class="simpleCart_shipping"></span>
                        <br />
                        <br />
                        <a href="checkout.php" class="uk-button uk-button-default">Proceed to Checkout</a>
                        <br />
                        <a href="javascript:;" class="uk-button uk-button-default simpleCart_empty">Empty</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>