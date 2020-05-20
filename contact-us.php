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
                    <button class="uk-button uk-button-default uk-align-right" type="button" uk-toggle="target: #email-us">Email us</button>
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
                    <button class="uk-button uk-button-default uk-align-right" type="button" uk-toggle="target: #live-chat" >Chat with us</button>
                    <p>Chat with a live associat Monday to Saturday, between 9AM - 6PM (AEST)</p>

                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-small uk-card-body">
                    <img class="uk-align-right uk-margin-remove-adjacent" src="img/google-map.png" width="190">
                    <h3 class="uk-card-title">ADDRESS</h3>
                    
                    <p>PLATINO ISLAND, Australia Pty Ltd, Level 15, 250 Collins</p>
                    <p>Street, Melbourne, VIC 3000, Australia</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>

    <div id="live-chat" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title">Live Chat</h2>
            <p>Live Chat is currently not working at this time and will be available as soon as possible.</p>
            <p>Please either email us or call us</p>
            <p class="uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Close</button>
            </p>
    </div>

    <div id="email-us" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title uk-text-center">Email Us</h2>
            </div>
            <div class="uk-modal-body">
                <form>
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin" uk-grid>
                            <div class="uk-width-auto">
                                <select class="uk-select" name="title" id="title">
                                    <option value="mr">Mr.</option>
                                    <option value="mrs">Mrs.</option>
                                    <option value="ms">Ms.</option>
                                    <option value="dr">Dr.</option>
                                </select>
                            </div>
                            <div class="uk-width-1-3">
                                <input class="uk-input" type="text" placeholder="First Name" id="fname" name="fname">
                            </div>
                            <div class="uk-width-1-3">
                                <input class="uk-input" type="text" placeholder="Last Name" id="lname" name="lname">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" placeholder="Email Address">
                        </div>

                        <div class="uk-margin" uk-grid>
                            <div class="uk-width-1-4">
                                <select class="uk-select" name="countCode" id="countCode">
                                    <option value="australia-code">+61 Australia</option>
                                    <option value="china-code">+86 China</option>
                                    <option value="usa-code">+1 United States</option>
                                    <option value="brazil-code">+55 Brazil</option>
                                </select>
                            </div>
                            <div class="uk-width-3-4">
                                <input class="uk-input" type="tel" placeholder="Phone Number (optional)" id="phoneNo" name="phoneNo">
                            </div>
                        </div>

                        <div class="uk-margin uk-child-width-1-4">
                            <div>
                                <select class="uk-select" >
                                    <option value="order-status">Order Status</option>
                                    <option value="return">Returns</option>
                                    <option value="prod-info">Product Information</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="8" placeholder="Please enter a valid inquiry or comment"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="uk-modal-footer uk-text-center">
                <button class="uk-button uk-button-default uk-modal-close" type="button" onclick="UIkit.notification({message: '<span uk-icon=\'icon: mail\'></span> Email sent', status: 'success'})">Send Email</button>
            </div>
        </div>
    </div>
</body>