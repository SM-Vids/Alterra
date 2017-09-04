<?php
    $formUsername = $_POST['formUsername'];
    $formPassword = $_POST['formPassword'];

    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");
    $statement->bindParam(1, $formUsername);
    $statement->bindParam(2, $formPassword);
    $statement->execute();

    if(empty($row = $statement->fetch())){
        echo "<script>alert(\"Sorry the database doesn't seem to recognize you.\");</script>";
        echo "<script>setTimeout(\"location.href = '../index.php';\",1);</script>";
    }else{
        session_start();
        $_SESSION['userName'] = $row['dbUsername'];
        $_SESSION['accessLevel'] = $row['accessLevel'];
        $_SESSION['userId'] = $row['userId'];
        header("location: ../index.php");
    }
?>