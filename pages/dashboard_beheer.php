<?php
    include "../include/conn.php";
    $sql = "SELECT * 
    FROM users
    INNER JOIN userdata ON users.id = userdata.users_id ";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result_users = $stmt->fetchAll();

    $sql = "SELECT * 
    FROM verblijven";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result_verblijven = $stmt->fetchAll();
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
        <main>
            <div class="tabel-klanten-beheer background-tabel">
                <table id=user-results>
                    <tr class='hoofd-tekst-tabel'>
                        <th>ID </th>
                        <th>Email</th>
                        <th>Rol-nummer</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Details</th>
                    </tr>

                    <?php foreach($result_users as $row): ?>
                        <tr class='results-voor-beheer'>
                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['email']; ?> </td>
                            <td> <?php echo $row['rol']; ?> </td> 
                            <td> <?php echo $row['voornaam']; ?> </td>
                            <td> <?php echo $row['achternaam']; ?> </td>
                            <td> <a href='dashboard-klanten-userdetails.php?id=<?php echo $row['id']; ?>'>details</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="tabel-verblijven-beheer background-tabel">
                <table id=user-results>
                    <tr class='hoofd-tekst-tabel'>
                        <th>ID</th>
                        <th>Int verblijf</th>
                        <th>Naam verblijf</th>
                        <th>Prijs</th>
                        <th>Land en plaats verblijf</th>
                        <th>Beoordeling</th>
                    </tr>

                    <?php foreach($result_verblijven as $column): ?>
                        <tr class='results-voor-beheer'>
                            <td> <?php echo $column['id']; ?> </td>
                            <td> <?php echo $column['type-verblijf']; ?> </td>
                            <td> <?php echo $column['naam']; ?> </td>
                            <td> <?php echo $column['prijs']; ?> </td>
                            <td> <?php echo $column['land-van-verblijf']; ?> </td>
                            <td> <?php echo $column['beoordeling']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </main>
    </body>
</html>