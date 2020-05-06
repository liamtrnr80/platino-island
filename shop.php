<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <?php include_once('includes/header.php'); ?>
</head>

<body>
    <?php include_once('includes/nav.php'); ?>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-panel uk-margin-medium uk-text-center">
                <h2>Shop</h2>
            </div>
            
            <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
                <div class= >
                    <div class="uk-card uk-card-body uk-card-secondary uk-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="product-template.php" class="uk-button uk-button-text">Read more</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-secondary uk-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-text">Read more</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-secondary uk-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-text">Read more</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <footer>
        <?php include_once('includes/footer.php'); ?>
    </footer>
</body>