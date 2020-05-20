<?php
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phoneNo'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$email = $_POST['email'];
$state = $_POST['state'];
$country = $_POST['country'];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Confirm Order</title>
        <?php include_once("includes/header.php"); ?>
    </head>

    <body>
        <?php include_once("includes/nav.php"); ?>

        <div class="uk-section full-height uk-padding">
            <div class="uk-container" uk-grid>
                <div class="uk-width-2-3 uk-flex-center">
                    <h3><?php echo $fname . " " . $lname?></h3>
                    <p>Address = <?php echo $address?></p>
                    <p>City = <?php echo $city?></p>
                    <p>Phone Number = <?php echo $phone?></p>
                    <p>Email = <?php echo $email?></p>
                    <p>Country = <?php switch($country) {
                        case "australia":
                            echo "Australia";
                            break;
                        case "usa":
                            echo "United States";
                            break;
                        default:
                            echo "";
                    } 
                    ?></p>
                    <p>State = <?php switch($state) {
                        case "nsw":
                            echo "New South Wales";
                            break;
                        case "vic":
                            echo "Victoria";
                            break;
                        case "qld":
                            echo "Queensland";
                            break;
                        case "wa":
                            echo "Western Australia";
                            break;
                        case "sa":
                            echo "South Australia";
                            break;
                        case "tas":
                            echo "Tasmania";
                            break;
                        case "act":
                            echo "ACT";
                            break;
                        default:
                            echo "";
                    } 
                    ?></p>
                    <p>Postcode = <?php echo $postcode?><br /><br />

                    <a href="thank-you.php" class="uk-button uk-button-secondary">Confirm Order</a>
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
            <?php include_once("includes/footer.php"); ?>
        </footer>
    </body>
</html>