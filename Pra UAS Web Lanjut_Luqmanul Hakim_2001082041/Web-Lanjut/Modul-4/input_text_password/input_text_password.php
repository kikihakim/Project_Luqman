<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="author" content="Luqmanul Hakim" />
    <meta name="description" content="Form" />
</head>
<body>
    <form action="proses.php" method="POST">
        <h2>Login Here...</h2>
        Username    : <input type="text" name="username" placeholder="Username"><br>
        Password    : <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="Login" value="Login">
        <input type="reset" name="reset" value="Reset">
    </form>
</body>
</html>