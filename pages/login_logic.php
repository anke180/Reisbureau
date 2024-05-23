<?php
    session_start();
    include '../include/conn.php';

    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: login.php");
        exit();
    }

    $email = $_POST["email"];
    $password = $_POST["password"];


    $stmt = $connection->prepare("SELECT * FROM users WHERE email=:email AND password=:pass");
    $stmt->execute(['email' => $email, 'pass' => $password]);
    $user = $stmt->fetch();


    if(rol == 1){
        header("Location: dashboard_beheer.php");
    } else {
        header("Location: index.php");
    }

    // if (!$email) {
    //     header("Location: login.php");
    // } else {
    //     $_SESSION["email"] = $email;
    //     header("Location: dashboard.php");
    // }
?>