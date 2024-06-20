<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/booking.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Reisbureau</title>
</head>
<body>
    <?php
        include "../include/nav.php";
    ?>
    <div class="head">
    
</div>
<div class="b4" id="mid">
<div class="booking">

    <form action='register_person.php' method="POST" id='registerform' class="form">
        <label>Hoeveel gasten?</label>
        <input  type="number" id='amountGuests' name="aantal_gasten" placeholder="1" class="but4" >
        <a onclick="setAmountOfGuests();" class="but3">Reizigers toevoegen</a>
 
        <button type="submit" name="submit" value="submit" class="but3">Boeken</button>
    </form>
</div>
<br>
</div>
    <!-- <?php
        include "../include/footer.php"
    ?> -->
</body>
</html>