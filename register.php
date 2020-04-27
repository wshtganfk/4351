
<!DOCTYPE htm>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>registration Form</title>
        <link rel ="stylesheet" href="register.css">
    </head>
    <body>
        <form class="LG" action="connect.php" method="post">
            <h1>register</h1>
            Enter your username : <input type="text" name="username" id="username" autocomplete="true" placeholder="username">
            Enter your password : <input type="password" name="password" id="password" autocomplete="true" placeholder="password">
            Enter your email: <input type="email" name="email" id="email" autocomplete="true" placeholder="email">
            Enter your firstname: <input type="firstname" name="firstname" id="firstnamel" autocomplete="true" placeholder="firstname">
            Enter your lastname: <input type="lastname" name="lastname" id="lastname" autocomplete="true" placeholder="lastname">
            Enter your address: <input type="address" name="address" id="address" autocomplete="true" placeholder="address">
            <a href="store.php">
            <input type="button" name="btnRegister" id="btnRegister" value="submit">
            </a>
            <a href="login.php">Already have account? </a>
            <br>
            <a href="store.php">home page</a>
        </form>
        
    </body>
</html>

