<?php 
    require "connect.php";

    $gameId = $_GET["id"];


    $statement = $dbh->prepare("DELETE FROM games WHERE gameId = $gameId");
    $statement->execute();

    header("location: ../index.php");
?>