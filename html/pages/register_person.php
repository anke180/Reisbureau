<?php
include '../include/conn.php';
echo $_POST['aantal_gasten'];
var_dump($_POST);


$sql = "INSERT INTO `hoofdboeker` ( `voornaam`, `achternaam`, `geboortedatum`, `email`, `geslacht`, `bankgegevens`, `adres`) VALUES (:voornaam, :achternaam, :geboortedatum, :email, :geslacht, :bankgegevens, :adres)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        'voornaam' => $_POST['voornaam0'],
        'achternaam' => $_POST['achternaam0'],
        'geboortedatum' => $_POST['geboortedatum0'],
        'email' => $_POST['email0'],
        'geslacht' => $_POST['geslacht0'],
        'bankgegevens' => $_POST['bankgegevens0'],
        'adres' => $_POST['adres0']
    ]);



?>