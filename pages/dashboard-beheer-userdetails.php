<?php
    include '../include/conn.php';
    $userid = $_GET['id'];

    $sql = "SELECT * 
    FROM userdata
    WHERE users_id = $userid";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result_users = $stmt->fetchAll();
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
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Telefoonnummer</th>
                        <th>geboorte_datum</th>
                        <th>Nationaliteit</th>
                        <th>Huisnummer</th>
                        <th>Postcode</th>
                        <th>Boeking details</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php foreach($result_users as $row): ?>
                        <tr class='results-voor-beheer'>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['voornaam']; ?> </td>
                            <td> <?php echo $row['achternaam']; ?> </td>
                            <td> <?php echo $row['telefoonnummer']; ?> </td>
                            <td> <?php echo $row['geboorte_datum']; ?> </td>
                            <td> <?php echo $row['nationaliteit']; ?> </td>
                            <td> <?php echo $row['huisnummer']; ?> </td>
                            <td> <?php echo $row['postcode']; ?> </td>
                            <td> <a href='dashboard-beheer-boeking.php?id=<?php echo $row['id']; ?>'>Booking details</a></td>
                            <td> <?php echo '<a href="dashboard-beheer-userdata-update.php?id='. $row['id'] . '">Update</a>'; ?></td>
                            <td> <?php echo '<a href="dashboard-beheer-userdata-delete.php?id='. $userid . '">Delete</a>'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
        <footer>
            
        </footer>
    </body>
</html>