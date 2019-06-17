<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $metaDescription; ?>"> 
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Games | <?php echo $title; ?></title>
</head>
<body>
<i class="fas fa-bars hide-aside"></i>
    <div class="wrapper">
        <aside>
            <img class="logo" src="img/logo.png" alt="">
            <h1 class="header">Games</h1>
            <nav>
                <ul>
                    <li><a class='<?php echo ($title == "Forside") ? "active" : "";  ?>' href="index.php">Forside</a></li>
                    <li><a href="shop.php" class='<?php echo ($title == "Shop") ? "active" : "";  ?>'>Shop</a></li>
                    <li><a href="#" class='<?php echo ($title == "index") ? "active" : "";  ?>'>Kontakt</a></li>
                    <li><a href="#" class='<?php echo ($title == "index") ? "active" : "";  ?>'>Om os</a></li>

                    <?php 
                    if (!isset($_SESSION['username']) || $_SESSION['accessLevel'] == 1)  { ?>
                        <li><a href="register.php" class='<?php echo ($title == "Opret bruger") ? "active" : "";  ?>'>Opret bruger</a></li>
                    <?php }; 
                        if (isset($_SESSION['username'])) {
                            ?>
                                <!-- Hvis man er logget ind -->

                                <!-- Log ud knap-->
                            <li><a href="assets/logout.php">Log ud</a></li>

                            <?php 
                        } 
                        else{
                                // Hvis du ikke er logget ind og skriver forkerte login informationer

                                // Log ind knap og e-mail indsat i input
                            if (isset($_GET['error']) == "login") {
                                ?>

                                <li><a class="loginBtn rotate active" href="#">Log in</a></li>
                                <form action="assets/login.php?page=<?php echo basename($_SERVER['PHP_SELF']) ?>" method="post" class="login">
                                <p class="error">Fejl! forkert kombination</p>
                                <input type="email" name="email" placeholder="E-mail" value="<?php echo $_GET['email'] ?>" required>
                                <input type="password" name="password" placeholder="Adgangskode" autofocus required>
                                <input type="submit" value="Log in">

                            <?php
                            }else{
                                ?>
                                <!-- Hvis du ikke er logget ind, og ikke har fået en fejl -->

                                <!-- log ind knap -->
                                <li><a class="loginBtn" href="#" class='<?php echo ($title == "index") ? "active" : "";  ?>'>Log ind</a></li>

                                <form action="assets/login.php?page=<?php echo basename($_SERVER['PHP_SELF']) ?>" method="post" class="login hide">
                                    <input type="email" name="email" placeholder="E-mail" required>
                                    <input type="password" name="password" placeholder="Adgangskode" required>
                                    <input type="submit" value="Log in">
                                <?php
                                }
                        }
                    ?>
                    </form>
                </ul>
            </nav>
            <form action="assets/login.php" method="post" class="login hide">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Adgangskode" required>
                <input type="submit" value="Log in">
            </form>
        </aside>
        <main>
            <img class="banner" src="img/banner.jpg" alt="">
            <div class="content">
                
                <?php if (isset($_SESSION['username'])){ ?>
                    <h3 class="welcome">Velkommen <?php echo $_SESSION['username']; ?>!</h3>
                <?php } ?>

                <h1 class="header">Games - Køb dem før din nabo!</h1>