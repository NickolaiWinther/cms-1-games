<?php 
$title = "Opret bruger";
$metaDescription = "Opret en bruger | Games";
require "header.php";

if (isset($_SESSION['username']) && $_SESSION['accessLevel'] != 1) {
    header ("location: index.php");
}

?>

<h2>Opret bruger</h2>

<form action="" method="post" class="create-form">

    <label for="formUsername">Brugernavn</label>
    <input type="text" name="formUsername" required>
    
    <label for="formEmail">E-mail</label>
    <input type="email" name="formEmail" required>

    <label for="formPassword">kodeord</label>
    <input type="password" name="formPassword" required>

    <label for="formRepeatPassword">Gentag kodeord</label>
    <input type="password" name="formRepeatPassword" >

    <?php 
        if (isset($_SESSION["accessLevel"]) && $_SESSION['accessLevel'] == 1){
            ?>
            <label for="accessLevel">access level (1 er flest rettigheder)</label>
            <select name="accessLevel">
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
            <?php
        }
    ?>

    <input type="submit" value="Opret bruger">
</form>

<?php 

    if(isset($_POST['formUsername'])){
        $formUsername = $_POST['formUsername'];
        $formEmail = $_POST['formEmail'];
        $formPassword = $_POST['formPassword'];
        $formRepeatPassword = $_POST['formRepeatPassword'];
        $formAccessLevel = 3;
        if (isset($_POST['accessLevel'])) {
            $formAccessLevel = $_POST['accessLevel'];
        }
        // $formAccessLevel = $_POST['accessLevel'] != null ? $_POST['accessLevel'] : 3;
        

        require "assets/connect.php";

        // Tester efter brugernavn
        $statement = $dbh->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $statement->bindParam(1, $formUsername);
        $statement->bindParam(2, $formEmail);
        $statement->execute();

        if ($row = $statement->fetch()) {
            echo "<p class='error'>Fejl! Brugernavnet $formUsername, eller e-mail $formEmail er allerede i brug!</p>";
        }
        else if ($formPassword != $formRepeatPassword) {
            echo "<p class='error'>Fejl! Dine to kodeord er ikke ens!</p>";
        }
        else{
            $statement = $dbh->prepare("INSERT INTO users(username, email, password, accessLevel) VALUES(?, ?, ?, ?)");
            $statement->bindParam(1, $formUsername);
            $statement->bindParam(2, $formEmail);
            $statement->bindParam(3, $formPassword);
            $statement->bindParam(4, $formAccessLevel);
            
            $statement->execute();

            echo "<p class='success'>Brugeren er oprettet</p>";
        }



    }




    require "footer.php";
?>