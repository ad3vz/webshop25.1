<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <?php 
            include 'headImport.php';
        ?>
        <link href="../css/loginSignup.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">

            <!-- title -->
            <div class="row">
                <div class="col d-flex justify-content-center mb-5">
                    <h1>Login</h1>
                </div>
            </div>

            <!-- login form -->
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <form method="post" action="checklogin.php" id="login-form">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="email" name="username" placeholder="user@email.com">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="password" name="password" placeholder="Passwort">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" value="Login" class="submit-button">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <p><a href="forgotPassword.html">Passwort vergessen?</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>Noch nicht registriert? <a href="signUp.php" class="link">Registrieren</a></p>
                </div>
            </div>
        </div>
       <?php
            include 'footImport.php';
       ?>
    </body>
</html>