<?php 
$title = "Shop";
$metaDescription = "Ost er fino!";
require "header.php";
?>

<?php if (isset($_SESSION['username'])) {
    ?>

    <form action="assets/createGame.php" method="post" class="create-form">

        <label for="title">Spillets titel</label>
        <input type="text" name="title">

        <label for="imgSrc">Billede</label>
        <input type="text" name="imgSrc">

        <label for="imgAlt">Billedets alt-text</label>
        <input type="text" name="imgAlt">

        <!-- Timestamp -->

        <label for="content">Beskrivelse</label>
        <textarea name="content"></textarea>

        <label for="categories">Kategorier (komma sepereret)</label>
        <input type="text" name="categories">

        <label for="price">Pris</label>
        <input type="number" name="price">

        <input type="submit" value="Opret spil">
    </form>
<?php } ?>

    <h2>Alle spil</h2>

    
    <div class="games-wrapper">

        <?php require "assets/getArticles.php" ?>
        
    </div>
                
<?php require "footer.php" ?>