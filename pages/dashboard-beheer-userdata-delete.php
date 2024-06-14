<?php
    session_start();
    include '../include/conn.php';

    $userid = $_GET["id"];

    $stmt = $connection->prepare("DELETE FROM users WHERE id=:userid");
    $stmt->bindParam(":userid", $userid);
    $stmt->execute();

    header('Location: dashboard_beheer.php');
?>