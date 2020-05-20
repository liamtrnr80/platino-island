<?php
session_start()
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>
    
    <div class="uk-container full-height uk-padding">
        <div class="uk-container uk-text-center">
            <h2 class="uk-heading-large uk-text-bold">Thank you for shopping with us</h2>
            <p>Your order was completed successfully</p>
            <span uk-icon="icon: mail"></span>An email receipt including details about your order has been sent to your email address provided.
        </div>    
    </div>
        <footer>
            <?php include_once("includes/footer.php"); ?>
        </footer>
    </body>
</html>