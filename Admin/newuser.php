<?php
    $formNewUsername = $_POST['newUsername'];
    $formNewPassword = $_POST['newPassword'];
    $formNewPasswordRepeat = $_POST['newPasswordRepeat'];

    require_once "connect.php";

    if ($formNewPassword == $formNewPasswordRepeat) {
    $statement = $dbh->prepare("INSERT INTO `users` (`dbUsername`, `dbPassword`) VALUES (?, ?);");
    $statement->bindParam(1, $formNewUsername);
    $statement->bindParam(2, $formNewPassword);
    $statement->execute();

    header("location: ../index.php");
    } else{
        echo "<script>alert(\"Sorry the passwords didn't match.\");</script>";
        echo "<script>setTimeout(\"location.href = '../index.php';\",1);</script>";
    }
?>