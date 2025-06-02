<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'headImport.php';
        ?>
        <link href="../css/loginSignup.css" rel="stylesheet">
        <title>Registrierung</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <!-- title -->
                <div class="col-lg-2"></div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <h1>TITEL DES WEBSHOP</h1>
                        </div>
                    </div>
                    <div class="row mb-lg-5">
                        <div class="col d-flex justify-content-center mb-3">
                            <h4>Krasser Slogan vom Produkt!</h4>
                        </div>
                    </div>

                    <!-- signup form -->
                    <div class="row">
                        <div class="col">
                            <form method="post" action="addUser.php" id="signup-form" class="p-3">
                                <div class="row mb-5">
                                    <div class="col">
                                        <input type="text" name="firstname" id="first-name" placeholder="Vorname">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="lastname" id="last-name" placeholder="Nachname">
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col">
                                        <input type="email" name="username" id="email" placeholder="user@email.de">
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col">
                                        <div class="col-6">
                                            <input type="date" name="dob" id="dob">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-5">
                                    <div class="col-9 col-sm-9">
                                        <input type="text" name="street" id="street" placeholder="Straße">
                                    </div>
                                    <div class="col-3 col-sm-3">
                                        <input type="number" name="number" id="nummer" placeholder="Nr.">
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-4 col-sm-3">
                                        <input type="number" name="plz" id="plz" placeholder="PLZ">
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <input type="text" name="city" id="ort" placeholder="Ort">
                                    </div>
                                </div>

                                <div class="row mb-5 d-flex justify-content-center">
                                    <div class="col-6">
                                        <input type="submit" value="Registrieren" class="submit-button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>Bereits registriert? <a class="link" href="login.php">Login</a></p>
                </div>
            </div>
        </div>



        <?php
            include 'footImport.php';
        ?>
    </body>
</html>