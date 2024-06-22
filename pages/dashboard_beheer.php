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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
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
                            <td> <a href='dashboard-beheer-userdetails.php?id=<?php echo $row['id']; ?>'>details</a></td>
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
                        <th>Details</th>
                    </tr>
 
                    <?php foreach($result_verblijven as $column): ?>
                        <tr class='results-voor-beheer'>
                            <td> <?php echo $column['id']; ?> </td>
                            <td> <?php echo $column['type_verblijf']; ?> </td>
                            <td> <?php echo $column['naam']; ?> </td>
                            <td> <?php echo $column['prijs']; ?> </td>
                            <td> <?php echo $column['land_van_verblijf']; ?> </td>
                            <td> <?php echo $column['beoordeling']; ?> </td>
                            <td> <a href='dashboard-beheer-verblijvendetails.php?id=<?php echo $column['id']; ?>'>details</a></td>  
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a href='dashboard-beheer-create-verblijf.php'>Nieuwe verblijf aanmaken</a>
            </div>
        </main>
 
       
            <?php
                include "../include/footer.php"
            ?>
    </body>
</html>