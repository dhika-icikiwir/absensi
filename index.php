<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'admin' && $pass == '123') {
        header("Location: administrator/");
    } 
    else if ($user == 'guru' && $pass == '123') {
        header("Location: guru/");
    }
    else {
        echo "Username atau password salah";
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>