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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
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