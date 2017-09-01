<?php
    //find conncect.php og indsæt den her men ikke hvis den allerede er i dokumentet
    require_once "connect.php";

    //lav en variabel "statement" og put sql koden over i den. (dbh har forbindelse til databasen)
    //sql koden tager alt i tabellen "articles" og soterer dem fra højest id til lavest id
    $statement = $dbh->prepare("SELECT * FROM articles ORDER BY id DESC ");

    //kør sql koden i databasen
    $statement->execute();

    //lav et while loop der kører så længe der er linjer i "$statement"
    while($row = $statement->fetch()){

        /*stop php og indsæt article tag og h2 tag derefter start php igen*/?>
        <article>
		    <h2><?php echo $row['heading']; ?></h2>

        <?php /*echo tager vores array($row) og finder exempelvis heading ud af tabellen og skriver det i det tag eller atrtbut echo ligger i*/ ?>
		    <p class="time"><?php echo $row['published']; ?> by: <?php echo $row['authorId']; ?></p>
		        <img src="img/<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
		    <p>
                <?php echo $row['description']; ?>
		    </p>
	</article>
    <?php
    //lukker while loop
    }
    $dbh = null;
?>