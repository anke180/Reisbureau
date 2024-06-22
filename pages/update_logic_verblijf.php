<?php
    include '../include/conn.php';
    $row = [
        'id' => $_POST['id'],
        'type_verblijf' => $_POST['type_verblijf'],
        'land_van_verblijf' => $_POST['land_van_verblijf'],
        'naam' => $_POST['naam'],
        'prijs' => $_POST['prijs'],
        'beoordeling' => $_POST['beoordeling'],
    ];
    $sql = "UPDATE verblijven SET type_verblijf=:type_verblijf, land_van_verblijf=:land_van_verblijf, naam=:naam, 
    prijs=:prijs, beoordeling=:beoordeling
    WHERE id=:id";
    $stmt = $connection->prepare($sql);
    $stmt ->execute($row);

    header('Location: dashboard_beheer.php');
?>