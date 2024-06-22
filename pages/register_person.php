<?php
include '../include/conn.php';
echo $_POST['aantal_gasten'];
// var_dump($_POST);
 
 
$sql = "INSERT INTO `hoofdboeker` ( `voornaam`, `achternaam`, `geboortedatum`, `email`, `geslacht`, `bankgegevens`, `adres`) VALUES (:voornaam, :achternaam, :geboortedatum, :email, :geslacht, :bankgegevens, :adres)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([
        'voornaam' => $_POST['voornaam0'],
        'achternaam' => $_POST['achternaam0'],
        'geboortedatum' => $_POST['geboortedatum0'],
        'email' => $_POST['email0'],
        'geslacht' => $_POST['geslacht0'],
        'bankgegevens' => $_POST['bankgegevens0'],
        'adres' => $_POST['adres0']
    ]);
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="../js/booking.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Reisbureau</title>
</head>
<body>
<div class="head">
   
    <div class="header">
                <div class="logo"></div>
                <a href="../index.php" class="but1">Home</a>
                <a href="" class="but1">Bestemming</a>
                <a href="" class="but1">Klantenservice</a>
                <a href="login.php" class="but1">Login</a>
            </div>
    </div>
    <div class="b4" id="mid">
        <div class="pay">
            <form action='paid.php' method="POST" id='registerform' class="form">
                <label>Betaal met:</label>
                <select name="bank" id="banks">
                    <option value="abnamro">ABN AMRO</option>
                    <option value="rabobank">Rabobank</option>
                    <option value="ing">ING</option>
                    <option value="knab">Knab</option>
                    <option value="sns">SNS Bank</option>
                    <option value="asn">ASN Bank</option>
                    <option value="regiobank">RegioBank</option>
                    <option value="triodos">Triodos Bank</option>
                    <option value="vanlanschot">Van Lanschot</option>
                    <option value="devolksbank">De Volksbank</option>
                </select>
                <button type="submit" name="submit" value="submit" class="but3">Betalen</button>
            </form>
        </div>
    </div>
</body>
</html>