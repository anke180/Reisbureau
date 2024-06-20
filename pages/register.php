<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>Reisbureau</title>
</head>
<body>
    <div class="head">
        <div class="header">
            <div class="logo"></div>
            <a href="../index.php" class="but1">Home</a>
            <a href="" class="but1">Bestemming</a>
            <a href="" class="but1">Klantenservice</a>
            <a href="login.php" class="but1">Login</a>
        </div>
        <div class="b1">
            <div class="blok-inlog">
                <form action='register_logic.php' name='register_logic' method='POST' >
                    <div class="login-form">
                        <div class="register-blok">
                            <a class="hoofd-tekst">Register</a>
                            <div class="email">
                                <label class="tekst-colour">Email: </label>
                                <input class="background" type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="telefoonnummer">
                                <label class="tekst-colour">Tel: </label>
                                <input class="background" type="number" name="tel" placeholder="Telefoonnummer" required>
                            </div>
                            <div class="password">
                                <label class="tekst-colour">Password: </label>
                                <input class="background" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="signin-blok">
                                <div class="signin-button">
                                    <input class="background tekst-colour" type="submit" value="Sign in">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
            include "../include/footer.php"
        ?>
   
</body>
</html>