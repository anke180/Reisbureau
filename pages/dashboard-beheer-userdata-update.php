<?php
    include '../include/conn.php';

    $stmt = $connection->prepare("SELECT * FROM userdata WHERE id=:id");
    $stmt->execute(['id' => $_GET['id']]);
    $row = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
            <?php
                include '../include/nav.php';
            ?>
        </header>
        <main>
            <form action="update_logic.php" name="update_userdata" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Voornaam: </label>
                <input type="tekst" name="voornaam" value="<?php echo $row['voornaam']; ?>">
                <label>Achternaam: </label>
                <input type="tekst" name="achternaam" value="<?php echo $row['achternaam']; ?>">
                <label>Telefoonnummer: </label>
                <input type="tekst" name="telefoonnummer" value="<?php echo $row['telefoonnummer']; ?>">
                <label>Geboorte datum: </label>
                <input type="tekst" name="geboorte_datum" value="<?php echo $row['geboorte_datum']; ?>">
                <label>Nationaliteit: </label>
                <input type="tekst" name="nationaliteit" value="<?php echo $row['nationaliteit']; ?>">
                <label>Huisnummer: </label>
                <input type="tekst" name="huisnummer" value="<?php echo $row['huisnummer']; ?>">
                <label>Postcode: </label>
                <input type="tekst" name="postcode" value="<?php echo $row['postcode']; ?>">
                <input type="submit" value="update product">
            </form>
        </main>
        <footer>


            <?php
                include "../include/footer.php"
            ?>

        </footer>
    </body>
</html>

