<?php 
    $returnPage = $_GET['page'];
    
    echo $returnPage;
    
    $email = $_POST["email"];
    $formPassword = $_POST["password"];

    require "connect.php";

    $statement = $dbh->prepare("SELECT * FROM users WHERE email = ? && password = ?");
    $statement->bindParam(1, $email);
    $statement->bindParam(2, $formPassword);
    $statement->execute();


    if(empty($row = $statement->fetch()) ){
        echo "Fejl i password eller username";
        header("location: ../index.php?error=login&email=$email");
    }else{
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['accessLevel'] = $row['accessLevel'];
        $_SESSION['userId'] = $row['userId'];


        header("location: ../$returnPage");
    }
    
    $dbh = null;
?>