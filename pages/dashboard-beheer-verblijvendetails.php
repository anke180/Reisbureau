<?php
    include '../include/conn.php';
    $verblijfid = $_GET['id'];

    $sql = "SELECT * 
    FROM verblijven
    WHERE id = $verblijfid";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result_verblijf = $stmt->fetchAll();
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
            <div class="tabel-userdata-overzicht">
                <table id=user-results>
                    <tr class='hoofd-tekst-tabel-userdata'>
                        <th>ID </th>
                        <th>Type verblijf</th>
                        <th>Land van verblijf</th>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Beoordeling</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php foreach($result_verblijf as $row): ?>
                        <tr class='results-voor-beheer'>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['type_verblijf']; ?> </td>
                            <td> <?php echo $row['land_van_verblijf']; ?> </td>
                            <td> <?php echo $row['naam']; ?> </td>
                            <td> <?php echo $row['prijs']; ?> </td>
                            <td> <?php echo $row['beoordeling']; ?> </td>
                            <td> <?php echo '<a href="dashboard-beheer-verblijf-update.php?id='. $row['id'] . '">Update</a>'; ?></td>
                            <td> <?php echo '<a href="dashboard-beheer-verblijf-delete.php?id='. $verblijfid . '">Delete</a>'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <footer>
            
        </footer>
    </body>
</html>