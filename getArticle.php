<?php
    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM articles ORDER BY id DESC");
    $statement->execute();

    while($row = $statement->fetch()){
        ?>
        <article>
		<h2><?php echo $row['heading']; ?></h2>
		<p class="time"><?php echo $row['published']; ?> by: <?php echo $row['name']; ?></p>
		<img src="img/<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
		<p>
            <?php echo $row['text']; ?>
		</p>
	</article>
    <?php
    }
?>