<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Logout</title>
        <?php include_once("includes/header.php"); ?>
    </head>

    <body>
        <?php include_once("includes/nav.php"); ?>

        <div class="uk-section full-height">
            <div class="uk-container">
                <div class="uk-panel uk-margin-medium uk-text-center">
                    <h2>Logout</h2>
                </div>
                <?php
                    session_start();
                    $_SESSION = array();
                    session_destroy();
                ?>
                <div class="uk-card uk-card-default uk-card-body">
                    <p>Thank you for visiting, please come again.</p>
                </div>
            </div>
        </div>
        <footer>
            <?php include_once("includes/footer.php"); ?>
        </footer>
    </body>
</html>