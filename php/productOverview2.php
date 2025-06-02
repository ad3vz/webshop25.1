<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artikelübersicht</title>
        <link href="../extern/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/productsOverview.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/cfe0a6d500.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">

            <!-- title -->
            <div class="row">
                <div class="col d-flex justify-content-center mb-5">
                    <h1>Artikelübersicht</h1>
                </div>
            </div>

            <!-- navigation -->
            <div class="row">
               <?php
                    include 'navimport.php';
               ?>
            </div>
            <!-- main area -->
            <div class="row">
                <!-- products -->
                <div class="col">
                    <div id="product-container" class="row d-flex justify-content-center"></div>
                </div>  
            </div>
        </div>



        <script src="../extern/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/main.js" type="module"></script>
    </body>
</html>