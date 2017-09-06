<?php
    session_start();

    $articleId = $_GET['articleId'];

    require_once "connect.php";

    //$statement = $dbh->prepare("DELETE FROM `articles` WHERE `articles`.`id` = ?");
    $statement = $dbh->prepare("SELECT * FROM articles WHERE `articles`.`id` = ?");
    
    $statement->bindParam(1, $articleId);
    $statement->execute();

    $row = $statement->fetch();

    if (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] <= 2 ) {
        deleteById($articleId);
    }
    else if(isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] == 3 && $_SESSION['userId'] == $row['authorId']){
        deleteById($articleId);        
    }
    else{
        header("Location: ../index.php");
    }

    function deleteById($ID)
    {
        require "connect.php";
        $statement = $dbh->prepare("DELETE FROM `articles` WHERE `articles`.`id` = ?");

        $statement->bindParam(1, $ID);
        $statement->execute();

        echo "Success";
        
        header("Location: ../index.php");
    }

    //"DELETE FROM `articles` WHERE `articles`.`id` = 10"
?>