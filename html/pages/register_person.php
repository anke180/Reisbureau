<?php
include 'conn.php';
echo $_POST['aantal_gasten'];
var_dump($_POST);

for($i = 0; $i < $_POST['aantal_gasten']; $i++){
    $sql = "INSERT INTO 'hoofdboeker' (voornaam, achternaam, email, geslacht, geboortedatum, adres, bankgegevens) VALUES (:voornaam, :achternaam, :email, :geslacht, :geboortedatum, :adres :bankgegevens)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'voornaam' => $_POST['voornaam'],
        'achternaam' => $_POST['achternaam'],
        'email' => $_POST['email'],
        'geslacht' => $_POST['geslacht'],
        'geboortedatum' => $_POST['geboortedatum'],
        'adres' => $_POST['adres'],
        'bankgegevens' => $_POST['bankgegevens'],
        'booking_id' => $_SESSION['booking_id']
    ]);
}


?>