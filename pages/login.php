<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reisbureau login pagina</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@142&family=Playwrite+SK:wght@100..400&family=Playwrite+US+Trad&family=Playwrite+VN:wght@100..400&display=swap" rel="stylesheet">    <title>Reisbureau</title>
</head>
    <body>
        <?php
            include "../include/nav.php";
        ?>   
        <div class="background-picture">
            <div class="blok-inlog">
                <form action='login_logic.php' name='login_logic' method='POST' >
                    <div class="login-form">
                        <div class="login-blok">
                            <a class="hoofd-tekst">Login</a>
                            <div class="email">
                                <label class="tekst-colour">Email: </label>
                                <input class="background" type="text" name="email" placeholder="Email" required>
                            </div>
                            <div class="password">
                                <label class="tekst-colour">Password: </label>
                                <input class="background" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="login-signin">
                                <div class="signin">
                                    <a href="register.php" class="signin-tekst">Register</a>
                                </div>
                                <div class="login2">
                                    <input class="background tekst-colour" type="submit" value="Login">
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