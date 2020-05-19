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

                <span class="simpleCart_quantity"></span> Items

                <div class="simpleCart_items uk-table"></div>
            </div>
        </div>
    </div>
    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>