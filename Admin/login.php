<?php
    $formUsername = $_POST['formUsername'];
    $formPassword = $_POST['formPassword'];

    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");
    $statement->bindParam(1, $formUsername);
    $statement->bindParam(2, $formPassword);
    $statement->execute();

    if(empty($row = $statement->fetch())){
        $_SESSION['loginFail'] = true;
        header("location: ../index.php");
    }else{
        session_start();
        $_SESSION['userName'] = $row['dbUsername'];
        $_SESSION['accessLevel'] = $row['accessLevel'];
        header("location: ../index.php");
    }
?>