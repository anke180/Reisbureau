<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/booking.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
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
    <?php
        include "../include/footer.php"
    ?> 
</body>
</html>