<?php
    session_start();
    include '../include/conn.php';

    $boekingid = $_GET["id"];

    $stmt = $connection->prepare("DELETE FROM boeken WHERE id=:id");
    $stmt->bindParam(":id", $boekingid);
    $stmt->execute();

    header('Location: dashboard_beheer.php');
?>