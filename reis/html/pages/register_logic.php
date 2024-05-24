<?php
    session_start();
    include '../include/conn.php';

    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: login.php");
        exit();
    }

    $email = $_POST['email'];
    $password = $_POST["password"];
    $rol = 2;


    $stmt = $connection->prepare("INSERT INTO users (email, password, rol) VALUES (:mail, :pass, :rol)");
    $stmt->bindParam(":mail", $email);
    $stmt->bindParam(":pass", $password);
    $stmt->bindParam(":rol", $rol);
    $stmt->execute();

    header('Location: ../index.php');
?>