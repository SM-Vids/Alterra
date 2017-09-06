<?php
session_start();
    if (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] != 1 ) {
        require "AdminContent/noAccess.php";
    }else{
?>
    <!-- HTML -->
<?php 
    }
?>