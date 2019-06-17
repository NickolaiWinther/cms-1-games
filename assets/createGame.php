<?php 
session_start();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $categories = $_POST['categories'];
    $publisher = $_SESSION['userId'];
    $imgSrc = $_POST['imgSrc'];
    $imgAlt = $_POST['imgAlt'];
    $price = $_POST['price'];
    $time = time();

    require_once "connect.php";
    $statement = $dbh->prepare("INSERT INTO games (title, content, categoryId, publisherId, imgSrc, imgAlt, price, time) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bindParam(1, $title);
    $statement->bindParam(2, $content);
    $statement->bindParam(3, $categories);
    $statement->bindParam(4, $publisher);
    $statement->bindParam(5, $imgSrc);
    $statement->bindParam(6, $imgAlt);
    $statement->bindParam(7, $price);
    $statement->bindParam(8, $time);

    $statement->execute();

    header("location: ../shop.php");
    
?>
