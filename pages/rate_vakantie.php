<?php
session_start();
include '../include/conn.php';


$data = [
    'user' => $_SESSION['id'],
    'verblijf' => $_GET['id'],
    'rating' => 1,
];

$query = 'INSERT INTO AppartementMorenaRating (user_id, verblijf_id, rating)
          VALUES (:user, :verblijf, :rating)';

$stmt= $connection->prepare($query);
$stmt->execute($data);
header("Location: bekijk_vakantie.php?id=" . $_GET['id']);
?>