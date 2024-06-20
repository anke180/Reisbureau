<?php
    include '../include/conn.php';
    $row = [
        'id' => $_POST['id'],
        'verblijven_id' => $_POST['verblijven_id'],
        'dossier_id' => $_POST['dossier_id'],
        'bankgegevens' => $_POST['bankgegevens'],
    ];
    $sql = "UPDATE boeken SET type_verblijf=:type_verblijf, land_van_verblijf=:land_van_verblijf, naam=:naam, 
    prijs=:prijs, beoordeling=:beoordeling
    WHERE id=:id";
    $stmt = $connection->prepare($sql);
    $stmt ->execute($row);

    header('Location: dashboard_beheer.php');
?>