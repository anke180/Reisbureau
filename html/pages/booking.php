<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "../include/nav.php";
        include "../include/conn.php";

        session_start();
            
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $wachtwoord = $_POST["wachtwoord"];
        $email = $_POST["mail"];


        $stmt = $connection->prepare("INSERT INTO users (email, wachtwoord, gebruikersnaam) VALUES(:email, :wachtwoord, :gebruikersnaam)");
        $stmt->bindParam(":gebruikersnaam", $gebruikersnaam);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        header("Location: ../login.php");
    ?> 


</body>
</html>