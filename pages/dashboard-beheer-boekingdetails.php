<?php
    include '../include/conn.php';
    $verblijvenid = $_GET['id'];

    $sql = "SELECT * 
    FROM verblijven
    WHERE boeken = $verblijvenid";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result_boeking = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap">

    </head>
    <body>
        <header>
            <?php
                include '../include/nav.php';
            ?>
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </body>
</html>