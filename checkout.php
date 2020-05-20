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
    
    <div class="uk-container full-height uk-padding">
        <div class="uk-container" uk-grid>
            <div class="uk-width-2-3">
                <form>
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend">Contact Information</legend><span class="uk-text-meta">Already have an account? <a href="#">Log In</a></span>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" placeholder="Email">
                        </div>

                        <legend class="uk-legend">Shipping Address</legend>
                        <div class="uk-margin uk-child-width-1-2" uk-grid>
                            <div>
                                <input class="uk-input" type="text" placeholder="First Name" id="fname" name="fname">
                            </div>
                            <div>
                                <input class="uk-input" type="text" placeholder="Last Name" id="lname" name="lname">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Company (optional)" id="company" name="company">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="Address" id="address" name="address">
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="text" placeholder="City" id="city" name="city">
                        </div>
                        
                        <div class="uk-margin uk-child-width-1-3" uk-grid>
                            <div>
                                <select class="uk-select" name="country" id="country">
                                    <option value="">--Select Country--</option>
                                    <option value="australia">Australia</option>
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" id="state" name="state">
                                    <option value="">--Select State--</option>
                                    <option value="nsw">New South Wales</option>
                                    <option value="vic">Victoria</option>
                                    <option value="qld">Queensland</option>
                                    <option value="wa">Western Australia</option>
                                    <option value="sa">South Australia</option>
                                    <option value="tas">Tasmania</option>
                                    <option value="act">ACT</option>
                                </select>
                            </div>
                            <div>
                                <input class="uk-input" type="number" placeholder="Postcode" id="phoneNo" name="phoneNo">
                            </div>
                        </div>
                        
                        <div class="uk-margin">
                            <input class="uk-input" type="tel" placeholder="Phone Number" id="phoneNo" name="phoneNo">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-default uk-card-body">
                    <p><b>Items:</b> <span class="simpleCart_quantity"></span></p>
                    <p><b>Subtotal:</b> <span class="simpleCart_total"></span></p>
                    <p><b>Shipping:</b> <span class="simpleCart_shipping"></span></p>
                    <p><b>Total:</b> <span class="simpleCart_grandTotal"></span></p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>