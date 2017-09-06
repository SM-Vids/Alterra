<?php
session_start();
    if (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] >= 4 ) {
        ?>
        <!doctype html>
        <html class="no-js" lang="">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Alterra | No-Access</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <link rel="apple-touch-icon" href="img/logo.png">
            <!-- Place favicon.ico in the root directory -->
        
            <link rel="stylesheet" href="../css/normalize.css">
            <link rel="stylesheet" href="../css/main.css">
            <link rel="stylesheet" href="../css/styles.min.css">
            <link rel="icon" href="../img/logo.png">
            <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        </head>
        <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrapper">
            <?php require "../sitecontent/header.php"; ?>
            <?php require "adminnav.php"; ?>
        <main>
            <h2>Sorry, you don't seem to have access to this page.</h2>
        </main>
        <hr>
        <?php require "../sitecontent/footer.php"; ?>
        </div>
        <?php require "adminscripts.php" ?>
        </body>
        </html>
        <?php
        
    }else{
?>

<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Alterra | Create Post</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="../img/logo.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/styles.min.css">
    <link rel="stylesheet" href="../css/create-styles.min.css">
	<link rel="icon" href="../img/logo.png">
	<script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>
        <?php require "AdminContent/body.php"; ?>
            <main>
                <form action="insertArticle.php" method="POST" enctype="multipart/form-data" >
                    <label for="heading">Title of the post</label>
                    <br>
                    <input type="text" id="heading" placeholder="Title" name="heading" required>
                    <br>
                    <label for="imgSrc">Post image</label>
                    <br>
                    <input type="file" id="imgSrc" name="imgSrc" required>
                    <br>
                    <label for="imgAlt">Image description</label>
                    <br>
                    <input type="text" id="imgAlt" placeholder="Image desc." name="imgAlt" required>
                    <br>
                    <label for="text">Post content</label>
                    <br>
                    <textarea cols="30" rows="10" type="text" id="text" placeholder="Write something for the post." name="text" required></textarea>
                    <br>
                    <button type="submit" value="Submit">Submit</button>
                </form>
            </main>
        <?php require "AdminContent/footer.php" ?>
        <?php require "AdminContent/scripts.php" ?>
<?php } ?>