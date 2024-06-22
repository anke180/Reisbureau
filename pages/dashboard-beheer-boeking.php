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
            <div class="background-boeking">
                <table id='boeking-users-tabel'>
                    <tr class='hoofdtekst-tabel-boeking'>
                        <th>Verblijven ID</th>
                        <th>Dossier ID</th>
                        <th>Bankgegevens</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php foreach($result_boeking as $row): ?>
                        <tr class='results-voor-beheer-boeking'>
                            <td> <?php echo $row['verblijven_id']; ?> </td>
                            <td> <?php echo $row['dossier_id']; ?> </td>
                            <td> <?php echo $row['bankgegevens']; ?> </td>
                            <td> <?php echo '<a href="dashboard-beheer-boeking-update.php?id='. $row['id'] . '">Update</a>'; ?></td>
                            <td> <?php echo '<a href="dashboard-beheer-boeking-delete.php?id='. $boekingid . '">Delete</a>'; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <footer>
                
          
        </footer>
    </body>
</html>