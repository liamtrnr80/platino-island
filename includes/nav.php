<nav class="uk-navbar-container" uk-navbar>
    <!-- Nav Left -->
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li><a href="index.php"><img src="img/New_Logo.png" alt="Platino Island" width="80px" height="80px"></a></li>
        </ul>
    </div>
    <!-- Nav Center -->
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="discover.php">Discover</a></li>
        </ul>
    </div>
    <!-- Nav Right -->
    <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
        <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
            <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
            </form>
        </div>

        <a uk-icon="icon: cart; ratio: 1.5" href="shopping-cart.php" role="button"></a>
        <span class="uk-badge uk-light simpleCart_quantity"></span>

        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true') {
                echo '
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#" class="" uk-icon="icon: user; ratio: 1.5"></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                ';
            } else {
                echo '
                    <ul class="uk-navbar-nav">
                        <li><a href="login.php">Login</a></li>
                    </ul>
                ';
            }

        ?>
        
    </div>
</nav>