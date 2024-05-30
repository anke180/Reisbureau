<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reisbueau bekijk vakantie</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include ../include/nav.php;
            ?>
        </header>
        <main>
            <?php
                $stmt = $connection->query("SELECT * FROM verblijven  ");
                while ($row = $stmt->fetch()){ 
                    echo 

                }
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>