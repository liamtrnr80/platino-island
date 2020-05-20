<?php
    session_start();

    if(isset($_POST['username'])) {
        if($_POST['username'] == 'inte' && $_POST['password'] == '2047') {
            $_SESSION['logged_in'] = 'true';
        } else {
            echo '
            <i>Incorrect login details.
            Please try again.</i><br />';
        }
    }

    if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')) {
        echo '
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Login</title>
            <?php include_once("includes/header.php"); ?>
        </head>
    
        <body>
            <?php include_once("includes/nav.php"); ?>
    
            <div class="uk-section">
                <div class="uk-container">
                    <div class="uk-panel uk-margin-medium uk-text-center">
                        <h2>Login</h2>
                    </div>
                    
                    <div class="uk-card uk-card-default uk-card-body">
                        <form action="'. $_SERVER['PHP_SELF'] . '" method="POST">
                            <div class="uk-margin">
                                <label class="uk-form-label">Username:</label>
                                <input class="uk-input" type="text" id="username" name="username" />
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">Password:</label>
                                <input class="uk-input" type="password" id="password" name="password" />
                            </div>
                            <div class="uk-margin">
                                <input class="uk-button uk-button-default" type="submit" value="Login" />
                            </div>
                        </form>
                        <a href="register.php">Sign Up</a> <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
            <footer>
                <?php include_once("includes/footer.php"); ?>
            </footer>
        </body>
    </html>';
    exit;
    }
?>