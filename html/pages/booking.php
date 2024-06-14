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
<div class="booking">

    <form action='register_person.php' method="POST" id='registerform' class="form">
        <label>Hoeveel gasten?</label>
        <input  type="number" id='amountGuests' name="aantal_gasten" placeholder="1" class="but4" >
        <a onclick="setAmountOfGuests();" class="but5">Reizigers toevoegen</a>

        <button type="submit" name="submit" value="submit" class="but3">Boeken</button>
    </form>
</div>
<br>
</div>
</body>
</html>