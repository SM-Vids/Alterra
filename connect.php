<?php

//Varibles
$servername = "localhost";
$mydb = "alterradb";
$username = "root";
$password = "";

try {
        //Connect
        $dbh = new PDO("mysql:host=$servername;dbname=$mydb;charset=utf8", $username, $password);

        // set the PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo '<script>console.log("Connected successfully")</script>'; 
    }
catch(PDOException $e)
    {
        //Error handling
        echo '<script>console.log("Connection failed: ")</script>';
    }
?>