<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>
    
    <div class="uk-container full-height">
        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <h3 class="uk-card-title">EMAIL</h3>
                    <button class="uk-button uk-button-default uk-align-right">Email us</button>
                    <p>Service@platinoisland.com.au</p>
                    <p>To reach our Online Sales Associates by email, click "Email us" to provide details and your contact information.</p>
                    
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <h3 class="uk-card-title">PHONE NUMBER</h3>
                    <button class="uk-button uk-button-default uk-align-right" disabled>Call us at +61 1300 422 868</button>
                    <p>Our Online Sales Associates are available Monday to Saturday, from 9AM - 6PM (AEST), excluding holidays.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <h3 class="uk-card-title">LIVE CHAT</h3>
                    <button class="uk-button uk-button-default uk-align-right">Chat with us</button>
                    <p>Chat with a live associat Monday to Saturday, between 9AM - 6PM (AEST)</p>

                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <h3 class="uk-card-title">ADDRESS</h3>
                    <img class="uk-align-right uk-margin-remove-adjacent" src="img/map.png" width="150">
                    <p>PLATINO ISLAND, Australia Pty Ltd, Level 15, 250 Collins</p>
                    <p>Street, Melbourne, VIC 3000, Australia</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <!-- <?php include_once('includes/footer.php'); ?> -->
    </footer>
</body>