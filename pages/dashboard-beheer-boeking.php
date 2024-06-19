<?php
    include '../include/conn.php';
    $userid = $_GET['id'];

    $sql = "SELECT * 
    FROM boeken
    WHERE users_id = $userid";
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
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include '../include/nav.php';
            ?>
        </header>
        <main>
            <div class="background-boeking">
                <table id='boeking-users-tabel'>
                    <tr class='hoofdtekst-tabel-boeking'>
                        <th>Verblijven ID</th>
                        <th>Dossier ID</th>
                        <th>Bankgegevens</th>
                    </tr>

                    <?php foreach($result_boeking as $row): ?>
                        <tr class='results-voor-beheer-boeking'>
                            <td> <?php echo $row['verblijven_id']; ?> </td>
                            <td> <?php echo $row['dossier_id']; ?> </td>
                            <td> <?php echo $row['bankgegevens']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <footer>
                
            <?php
                include "../include/footer.php"
            ?>
        </footer>
    </body>
</html>