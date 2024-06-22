<?php
    include '../include/conn.php';

    $stmt = $connection->prepare("SELECT * FROM boeken WHERE id=:id");
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
            <form action="update_logic_boeking.php" name="update_logic_boeken" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Verblijven ID: </label>
                <input type="tekst" name="verblijven_id" value="<?php echo $row['verblijven_id']; ?>">
                <label>Dossier ID: </label>
                <input type="tekst" name="dossier_id" value="<?php echo $row['dossier_id']; ?>">
                <label>Bankgegevens: </label>
                <input type="tekst" name="bankgegevens" value="<?php echo $row['bankgegevens']; ?>">
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