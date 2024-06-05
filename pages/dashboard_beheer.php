<?php
    include "../include/conn.php";
    $sql = "SELECT * 
    FROM users
    INNER JOIN userdata ON users.id = userdata.users_id ";
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
        <main class='background-tabel'>
            <table id=user-results>
                <tr class='hoofd-tekst-tabel'>
                    <th>ID </th>
                    <th>Email</th>
                    <th>Rol-nummer</th>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Geboorte-datum</th>
                    <th>Nationaliteit</th>
                </tr>

                <?php foreach($result as $row): ?>
                    <tr class='results-voor-beheer'>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['rol']; ?> </td>
                        <td> <?php echo $row['voornaam']; ?> </td>
                        <td> <?php echo $row['achternaam']; ?> </td>
                        <td> <?php echo $row['geboorte-datum']; ?> </td>
                        <td> <?php echo $row['nationaliteit']; ?> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </main>
        <footer>

        </footer>
    </body>
</html>