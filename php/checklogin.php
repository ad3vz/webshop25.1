<?php
    $username="";
    $password="";
    $bLoginSuccess=false;

    if(isset($_POST['username'])){
        $username=$_POST['username'];
    }
    if(isset($_POST['password'])){
        $password=$_POST['password'];
    }

    if($username !=="" && $password !==""){
   
        include 'dbsettings.php';

        $conn=new PDO("mysql:host=localhost;dbname=".$dbDatabaseName,$dbLoginUsername,$dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // var_dump($_POST);

        $sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";

        foreach ($conn->query($sql) as $row) 
        {
            session_start();

            $_SESSION['id']=$row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['login'] = 111;
            $_SESSION['time'] = time();

            $bLoginSuccess=true;
        }
        
        //Verbindung schließen
        $conn=null;
    }

    if($bLoginSuccess){
        header ("Location: productOverview2.php");
    } else{
        header ("Location: login.php");
    }
?>