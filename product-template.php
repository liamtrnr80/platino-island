<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Template</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-container full-height">
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-2" uk-grid>
                    <div>
                        <img class="uk-align-left" src="img/10-AIRBRUSH-MINERAL-PRIMER.jpg" width="500" height="500">
                    </div>
                    <div class="simpleCart_shelfItem">
                        <h1 class="item_name">Product Name</h1>
                        <h5 class="item_price">$20.00</h5>
                        <a class="item_add uk-button uk-button-default" href="javascript:;">Add to Cart</a>
                        <ul uk-accordion>
                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#">Product Description</a>
                                <div class="uk-accordion-content">
                                    <p>[Enter Product description here]</p>
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
                        <p></p>
                        <h4>How to Use</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at sapien quis sem pretium volutpat nec ut felis. Nulla luctus lacus at dolor dignissim gravida. Aliquam laoreet metus felis, malesuada ultricies justo mollis id. Curabitur dapibus finibus erat, id ornare elit porta in. Nullam lorem ligula, rutrum non nibh at, elementum porta neque. Mauris sagittis magna metus, sed scelerisque quam venenatis quis. Nullam vulputate ipsum non mauris tempus, sed viverra metus convallis. Nunc ac lorem felis. Duis pharetra felis ligula, vestibulum bibendum enim fermentum iaculis. Pellentesque vitae finibus eros, in efficitur quam. In convallis tortor sapien, quis sodales urna hendrerit non. In pulvinar iaculis eleifend. Sed ullamcorper ante ac dui accumsan commodo. Nunc posuere cursus gravida.</p>
                        <p>Sed est neque, vehicula nec eleifend a, ultricies quis ex. Morbi nec mattis nunc. Aliquam erat volutpat. Etiam elit ante, molestie eget interdum a, consectetur non velit. Integer efficitur molestie sem sed placerat. Nullam at est tortor. Maecenas sit amet sem eget tellus rhoncus congue at in turpis. Aenean mattis lorem vel convallis bibendum. Aliquam tempus posuere sapien, vel malesuada risus tincidunt eget. Vivamus arcu elit, volutpat ut molestie nec, malesuada ut lorem. Curabitur eu dictum libero. Praesent at tincidunt enim, ac tempor nibh. Aenean gravida ultrices sem non eleifend. Nullam volutpat pharetra enim, non lobortis dui pellentesque sed. Vivamus feugiat, arcu id scelerisque imperdiet, dolor risus sollicitudin sem, a condimentum magna sapien vel felis.</p>
                        <p>Mauris at nunc arcu. Ut rhoncus elit quis dui egestas, ut tincidunt neque luctus. Fusce augue massa, iaculis eu justo in, finibus pretium lectus. Integer nec egestas nisl, eu facilisis nunc. Sed felis lectus, aliquam sit amet dui vitae, pretium finibus lacus. Sed condimentum semper metus, sit amet euismod elit volutpat nec. Donec egestas ipsum eu risus mattis, quis aliquet eros venenatis. Ut maximus est eu nibh blandit vestibulum. Duis nec nunc vitae lacus hendrerit lacinia vel sit amet leo. Etiam rhoncus libero nec ultrices posuere. Cras non elit nec urna ultricies posuere. Vivamus ut lacus vitae orci consectetur aliquam. Vestibulum ut euismod quam. Phasellus bibendum a tortor non vestibulum. Pellentesque laoreet, leo ac fermentum elementum, mauris risus imperdiet lorem, in feugiat diam tortor sed neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="uk-width-1-4">
                        <h4>Benefits</h4>
                        <ul class="uk-list">
                            <li>List Item #1</li>
                            <li>List Item #2</li>
                            <li>List Item #3</li>
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