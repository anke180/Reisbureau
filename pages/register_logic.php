<?php
    session_start();
    include '../include/conn.php';

    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: login.php");
        exit();
    }

    $email = $_POST['email'];
    $telephonenumber = $_POST["tel"];
    $password = $_POST["password"];
    $rol = 10;


    $stmt = $connection->prepare("INSERT INTO users (email, telefoonnummer, password, rol) VALUES (:mail, :telefoon, :pass, :rol)");
    $stmt->bindParam(":mail", $email);
    $stmt->bindParam(":telefoon", $telephonenumber);
    $stmt->bindParam(":pass", $password);
    $stmt->bindParam(":rol", $rol);
    $stmt->execute();

    header('Location: ../index.php');
?>