<?php
    include '../include/conn.php';
    $row = [
        'id' => $_POST['id'],
        'voornaam' => $_POST['voornaam'], 
        'achternaam' => $_POST['achternaam'],
        'telefoonnummer' => $_POST['telefoonnummer'],
        'geboorte_datum' => $_POST['geboorte_datum'],
        'nationaliteit' => $_POST['nationaliteit'],
        'huisnummer' => $_POST['huisnummer'],
        'postcode' => $_POST['postcode'],
    ];
    $sql = "UPDATE userdata SET voornaam=:voornaam, achternaam=:achternaam, telefoonnummer=:telefoonnummer, geboorte_datum=:geboorte_datum,
    nationaliteit=:nationaliteit, huisnummer=:huisnummer, postcode=:postcode
    WHERE id=:id";
    $stmt = $connection->prepare($sql);
    $stmt ->execute($row);

    header('Location: dashboard_beheer.php');
?>