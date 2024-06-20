<?php
    include '../include/conn.php';

    $stmt = $connection->prepare("SELECT * FROM verblijven WHERE id=:id");
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
            <form action="update_logic_verblijf.php" name="update_verblijfdata" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Type verblijf: </label>
                <input type="tekst" name="type_verblijf" value="<?php echo $row['type_verblijf']; ?>">
                <label>Land van verblijf: </label>
                <input type="tekst" name="land_van_verblijf" value="<?php echo $row['land_van_verblijf']; ?>">
                <label>Naam: </label>
                <input type="tekst" name="naam" value="<?php echo $row['naam']; ?>">
                <label>Prijs: </label>
                <input type="tekst" name="prijs" value="<?php echo $row['prijs']; ?>">
                <label>Beoordeling: </label>
                <input type="tekst" name="beoordeling" value="<?php echo $row['beoordeling']; ?>">
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