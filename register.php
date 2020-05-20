<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>
        <?php include_once("includes/header.php"); ?>
    </head>

    <body>
        <?php include_once("includes/nav.php"); ?>

        <div class="uk-section full-height">
            <div class="uk-container">
                <form action="/join.php" method="POST">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <label for="username" class="uk-form-label">Username:</label>
                            <input class="uk-input" type="text" id="username" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="uk-margin">
                            <label for="email" class="uk-form-label">Email:</label>
                            <input class="uk-input" type="email" id="email" name="email" placeholder="Enter Email" required>
                        </div>
                        <div class="uk-margin">
                            <label for="password" class="uk-form-label">Password:</label>
                            <input class="uk-input" type="password" id="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="uk-margin">
                            <label for="con-pass" class="uk-form-label">Confirm Password:</label>
                            <input class="uk-input" type="password" id="con-pass" name="con-pass" placeholder="Enter Password" required>
                        </div>
                        <div class="uk-margin uk-child-width-1-2" uk-grid>
                            <div>
                                <label for="fname" class="uk-form-label">First Name:</label>
                                <input class="uk-input" type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                            </div>
                            <div>
                                <label for="lname" class="uk-form-label">Last Name:</label>
                                <input class="uk-input" type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label for="dob" class="uk-form-label">D.O.B.</label>
                            <input type="date" class="uk-input" id="dob" name="dob" required>
                        </div>
                        <div class="uk-margin">
                            <label for="address" class="uk-form-label">Address:</label>
                            <input class="uk-input" type="email" id="address" name="address" placeholder="Enter Username" required>
                        </div>
                        
                        <div class="uk-margin uk-text-center">
                            <input class="uk-button uk-button-default" type="submit" value="Register">
                            <input class="uk-button uk-button-default" type="reset">
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <footer>
            <?php include_once("includes/footer.php"); ?>
        </footer>

        <script>
        //Frontend Form Validation for Empty Fields
        $(document).ready(function() {
            $('.uk-input').blur(function() {
                //Check if input is empty
                if (!$.trim(this.value).length) {
                    //Empty
                    $(this).addClass('uk-form-danger');
                    $(this).removeClass('uk-form-success');
                } else {
                    //Not Empty
                    switch (($(this).attr("name"))) {
                        case "fname":
                            if (this.value.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
                                $(this).addClass('uk-form-success');
                                $(this).removeClass('uk-form-danger');
                            } else {
                                $(this).addClass('uk-form-danger');
                                $(this).removeClass('uk-form-success');
                            }
                            break;
                        case "lname":
                            if (this.value.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
                                $(this).addClass('uk-form-success');
                                $(this).removeClass('uk-form-danger');
                            } else {
                                $(this).addClass('uk-form-danger');
                                $(this).removeClass('uk-form-success');
                            }
                            break;
                        case "email":
                            if (this.value.match("^[^@]+@[^@]+\.[^@]+$")) {
                                $(this).addClass('uk-form-success');
                                $(this).removeClass('uk-form-danger');
                            } else {
                                $(this).addClass('uk-form-danger');
                                $(this).removeClass('uk-form-success');
                            }
                            break;
                        default:
                            $(this).addClass('uk-form-success');
                            $(this).removeClass('uk-form-danger');
                    }
                }
            });
        });
    </script>
    </body>
</html>