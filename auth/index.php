<?php
session_start();

$login = 'admin';
$password = '$2y$10$fuyNgEyTsxF/rSW/HLu/WuqXEtY7JAK.gz55PwjNsMeppI5EgxByu';

if (!empty($_POST)) {
    if ($_POST['login'] === $login && password_verify($_POST['password'], $password)) {
        $_SESSION['auth'] = $login;
        $_SESSION['res'] = 'Success!';
        header("Location: secret.php");
        die;
    } else {
        $_SESSION['res'] = 'Error!';
        header("Location: index.php");
        exit;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

<ul>
    <li><a href="secret.php">Secret page</a></li>
</ul>

<h3>Эту страницу может видеть любой пользователь</h3>

<?php
if (isset($_SESSION['res'])) {
    echo "<h4>AUTH: {$_SESSION['res']}</h4>";
    unset($_SESSION['res']);
}
?>

<form method="post">
    Login: <input type="text" name="login">
    Password: <input type="password" name="password">
    <button type="submit">Login</button>
</form>

</body>
</html>
