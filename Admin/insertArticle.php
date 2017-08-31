<?php
    //Varibles
    $post = array(
    "heading"=>$_POST['heading'],
    "imgSrc"=>$_POST['imgSrc'],
    "imgAlt"=>$_POST['imgAlt'],
    "text"=>$_POST['text']
);

//Send to alterradb
require_once "connect.php";
$statement = $dbh->prepare("INSERT INTO articles (heading, imgSrc, imgAlt, text) VALUES(?, ?, ?, ?) ");

$statement->bindParam(1, $post['heading']);
$statement->bindParam(2, $post['imgSrc']);
$statement->bindParam(3, $post['imgAlt']);
$statement->bindParam(4, $post['text']);

header('location: ../index.php');
?>