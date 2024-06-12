<?php
    include "../include/conn.php";
    $sql = "SELECT * 
    FROM users
    INNER JOIN boeken ON users.id = boeken.users_id ";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reisbureau dashboard beheer pagina</title>
        <link rel="stylesheet" href="../css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include "../include/nav.php";
            ?>
        </header>
        <main class='background-tabel-klanten'>
            <table id=results-klanten>
                <tr class='hoofd-tekst-tabel-klanten'>
                    <th>ID </th>
                    <th>Email</th>
                    <th>Voornaam</th>
                    <th>Vakantie bestemming</th>
                    <th>Nationaliteit</th>
                </tr>

                <?php foreach($result as $row): ?>
                    <tr class='results-voor-klanten'>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['voornaam']; ?> </td>
                        <td> <?php echo $row['achternaam']; ?> </td>
                        <td> <?php echo $row['nationaliteit']; ?> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
        <footer>

        </footer>
    </body>
</html>