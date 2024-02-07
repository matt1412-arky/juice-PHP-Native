<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Lovely Juice by Gita</title>
</head>

<body>
    <div class="container">
        <div class="foto">
            <div class="kata">
                <h1>
                    LOGIN
                </h1>
            </div>
        </div>

        <div class="konten">
            <div class="center">
                <h1>LOGIN</h1>
                <form action="login_p.php" method="POST">
                    <div class="txt-field">
                        <input type="text" name="username" id="user" required autocomplete="off">
                        <label for="user">Username</label>
                    </div>
                    <div class="txt-field">
                        <input type="password" name="password" id="pass" required>
                        <label for="pass">Password </label>
                    </div>
                    <a href="login_p.php"><input type="submit" name="register" value="LOGIN"></input></a>
                    <div class="signup_link">
                        Have't an account? <a href="registrasi.php">REGISTER</a>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <div class="cr">
                <h4>&copy; Lovely Juice by Gita 2022</h4>
            </div>
        </footer>
</body>

</html>