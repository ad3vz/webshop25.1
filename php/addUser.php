<?php
    include 'dbsettings.php';

    $conn = new PDO("mysql:host=localhost;dbname=".$dbDatabaseName,$dbLoginUsername,$dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    var_dump($_POST);

    $sql = "INSERT INTO users (firstname, lastname, username, street, number, plz, city) VALUES (:firstname, :lastname, :username, :street, :number, :plz, :city)";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':firstname' => $_POST['firstname'],
        ':lastname' => $_POST['lastname'],
        ':username' => $_POST['username'],
        ':street' => $_POST['street'],
        ':number' => $_POST['number'],
        ':plz' => $_POST['plz'],
        ':city' => $_POST['city']
    ]);
?>