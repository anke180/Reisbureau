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
                <form action='login_logic.php' name='login_logic' method='POST' >
                    <div class="login-form">
                        <div class="login-blok">
                            <a class="login-tekst">Login</a>
                            <div class="email">
                                <label class="tekst-colour">Email: </label>
                                <input class="background" type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="password">
                                <label class="tekst-colour">Password: </label>
                                <input class="background" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="login-signin">
                                <div class="login2">
                                    <input class="background2 tekst-colour" type="submit" value="Login">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>