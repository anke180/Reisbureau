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
    // var_dump($user);
    
    if($user){
        if($user["rol"] == 1){
            $_SESSION['id'] = $user['id'];
            header("Location: dashboard_beheer.php");
        } else{
            $_SESSION['id'] = $user['id'];
            header("Location: ../index.php");
        }
    }
    else{
        $_SESSION['errormessage'] = 'De ingevulde gegevens zijn niet juist';
        header("Location: ../index.php");
    }
?>