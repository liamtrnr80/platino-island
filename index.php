<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platino Island</title>
    <?php include_once('includes/header.php'); ?>
</head>
<style>
    .full-height {
        min-height: calc(100vh - (100px + 40px));
}
</style>
<body>
    <?php include('admin-login.php'); ?>

    <?php include_once('includes/nav.php'); ?>
    
    <div class="uk-container full-height" style="padding: 10px 0px;">
        <h1 class="uk-heading-large uk-text-center">PLATINO ISLAND</h1>
        <div class="uk-container">
            <div class="uk-position-relative uk-dark" uk-slideshow="autoplay: true">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="img/Main1.jpeg" alt="" uk-cover>
                        <div class="uk-overlay uk-position-center uk-light uk-text-center">
                            <p class="uk-text-lead uk-text-italic">Discover Your New Make-up Tour</p>
                            <p class="uk-heading-small uk-text-bold">With Our Natural Ingredients Product</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/Main2.jpeg" alt="" uk-cover>
                        <div class="uk-overlay uk-position-bottom-right uk-dark">
                            <div class="uk-tile uk-tile-default uk-text-center">
                                <p class="uk-text-large uk-text-bold">Our Happy Mother's Day</p>
                                <p>TAKE SPECIAL KIT WITH CODE MUM30 AT CHECK OUT</p>
                                <a href="shop.php" class="uk-button uk-button-secondary">Shop Now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/Main3.jpeg" alt="" uk-cover>
                        <div class="uk-overlay uk-position-bottom-right uk-dark">
                            <div class="uk-tile uk-tile-default uk-text-center">
                                <p class="uk-text-large uk-text-bold">Subscribe</p>
                                <p>To get 35% off your first order</p>
                                <a href="register.php" class="uk-button uk-button-secondary">Register Now</a>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="uk-position-bottom-center uk-postion-small  uk-light" style="padding-bottom:10px;">
                    <ul class="uk-dotnav">
                        <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
                        <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
                        <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
                    </ul>
                </div>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-light" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-light" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>
        </div>
        <div class="container">
            <p></p>
            <h3 class="uk-heading-small uk-text-center">#MAKE-UP THAT'S PERFECT FOR YOU</h3>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true">
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Cactus Flower.jpg">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Chamomile-oil-.jpg" style="height: 205;">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Hyaluronic-Acid-.jpg" style="height: 205;">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Jojoba-Beans.jpg">
                        </div>
                    </li>
                    <li>
                        <div class="uk-panel">
                            <img class="uk-border-circle" width="205" height="205" src="img/Olive-extract-.jpg" style="height: 205;">
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>

            <div class="uk-text-center" style="padding: 10px 0px;">
                Our promise is natural formulas that are high-performing and perfect for you.
                Platino Island is more than cosmetic. It's amazing, from the inside out.
                
            </div>
            <div class="uk-text-center">
                <a href="about-us.php" class="uk-button">LEARN MORE</a>
            </div>
            
            <div class="uk-container uk-text-center">
                <h3 class="uk-heading-medium uk-margin-small-bottom">SHOW INSTAGRAM</h4>
                <h4 class="uk-heading-small uk-margin-small-top">#platinoislandoffical</h5>
            </div>

            <div class="uk-container" style="background: #f5e7df">
                <div class="uk-child-width-1-5 uk-text-center" uk-grid>
                    <img class="uk-border-circle uk-padding-small" width="200" height="200" src="img/pexels-photo-3155588.jpeg">
                    <img class="uk-border-circle uk-padding-small" width="200" height="200" src="img/pexels-photo-3520723.jpeg">
                    <img class="uk-border-circle uk-padding-small" width="200" height="200" src="img/pexels-photo-3601536.jpeg">
                    <img class="uk-border-circle uk-padding-small" width="200" height="200" src="img/beauty-fashion-background-shop-1571585.jpeg">
                    <img class="uk-border-circle uk-padding-small" width="200" height="200" src="img/pexels-photo-3526843.jpeg">
                </div>
            </div>

            <div class="uk-container uk-padding-large">
                <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                    <div>
                        <p>Join our Membership</p>

                        <a href="register.php" class="uk-button uk-button-large uk-button-secondary">Register</a>
                         
                    </div>

                    <div class="uk-divider-vertical uk-child-width-1-2 uk-text-center" uk-grid>
                        <div>
                            <p>CUSTOMER SERVICE</p>
                        </div>
                        <div>
                            <p>RESOURCE</p>
                        </div>

                        <div class="uk-divider-vertical uk-width 1-1 uk-child-width-1-3 uk-text-center uk-margin-small" uk-grid>
                            <div>
                                <ul class="uk-list">
                                    <li><a href="#">Stockists</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Shipping & Returns</a></li>
                                    <li><a href="#">Store Policy</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list">
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Ingredients</a></li>
                                    <li><a href="Discover">Beauty Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>