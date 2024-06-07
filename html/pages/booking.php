<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="../js/booking.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Reisbureau</title>
</head>
<body>
<button onclick="setAmountOfGuests()">add guests</button>

<form action='register_person.php' method="POST" id='registerform'>
    <label>Hoeveel gasten?</label>

    <input  type="number" id='amountGuests' name="aantal_gasten" placeholder="1">
    <input type="button" name="submit" value="submit">
</form>
<br>
</body>
</html>