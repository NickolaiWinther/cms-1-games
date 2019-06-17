<?php 
    require_once "connect.php";

    $statement = $dbh->prepare("SELECT * FROM `games` JOIN users ON games.publisherId = users.userId");
    $statement->execute();

    while ($row = $statement->fetch()) {
        ?>
        <article class="game">
            <h3 class="game-title">
                <?php echo $row['title'];
                
                if (isset($_SESSION['accessLevel'])) { 
                    if ($_SESSION['accessLevel'] == 1 || ($_SESSION['accessLevel'] == 2 && $_SESSION['username'] == $row['username'])){ 
                        ?>
                    <a href="assets/deleteArticle.php?id=<?php echo $row['gameId'] ?>" class="delete-article"><i class="fas fa-times-circle"></i></a>

                    
                    <?php
                    }
                }
                ?>
            </h3>

            <img class="game-image" src="img/<?php echo $row['imgSrc'] ?>" alt=<?php echo $row['imgAlt'] ?>>

            <div class="publisher">
                <p class="publisher-name"><?php echo $row['username'] ?></p>
                <p class="publicher-time"><?php echo date('d-m-Y',  $row['time'] ) ?></p>
            </div>

            <p class="game-description"><?php echo $row['content'] ?></p>
            
            <p>Kategorier</p>
            <p><?php echo $row['categoryId'] ?></p>
            <!-- <ul class="categories">
                <li class="category">Action</li>
                <li class="category">Oplevelser</li>
                <li class="category">Online Co-op</li>
            </ul> -->
            <a href="" class="price"><?php echo $row['price'] ?> kr.</a>
        </article>
        <?php 
    }
$dbh = null;
?>