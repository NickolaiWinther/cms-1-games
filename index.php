<?php 
$title = "Forside";
$metaDescription = "JOW!";
require "header.php" 
?>

    <h2>Mest populære spil</h2>

    <div class="games-wrapper">

        <?php 
            require "assets/getArticles.php";
        ?>

    </div>

<?php require "footer.php" ?>