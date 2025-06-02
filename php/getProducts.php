<?php
    include 'dbsettings.php';

    $verbindung = new PDO("mysql:host=localhost;dbname=".$dbDatabaseName,$dbLoginUsername,$dbPassword);

    //sorgt dafür dass eine Exception geworfen wird -> hilft beim debuggen
    $verbindung->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //teilt Browser mit -> JSON Daten -> Daten werden korrekt interpretiert
     header('Content-Type: application/json');
    //sql
    $sql = "SELECT imagepath FROM images";
    $result = $verbindung->query($sql);
    $daten = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($daten);
   

    $verbindung = null;
?>