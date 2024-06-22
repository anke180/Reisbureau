<?php
    session_start();
    include '../include/conn.php';

    $verblijfid = $_GET["id"];

    $stmt = $connection->prepare("DELETE FROM verblijven WHERE id=:id");
    $stmt->bindParam(":id", $verblijfid);
    $stmt->execute();

    header('Location: dashboard_beheer.php');
?>