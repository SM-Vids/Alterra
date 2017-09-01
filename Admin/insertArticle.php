<?php
    //Varibles(
    $heading=$_POST['heading'];
    $imgSrc=$_POST['imgSrc'];
    $imgAlt=$_POST['imgAlt'];
    $description=$_POST['text'];

//Send to alterradb
require_once "connect.php";
$statement = $dbh->prepare("INSERT INTO articles (heading, imgSrc, imgAlt, description) VALUES(?, ?, ?, ?) ");

$statement->bindParam(1, $heading);
$statement->bindParam(2, $imgSrc);
$statement->bindParam(3, $imgAlt);
$statement->bindParam(4, $description);

$statement->execute();
?>