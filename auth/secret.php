<?php
session_start();

if (isset($_GET['do']) && $_GET['do'] == 'logout') {
    unset($_SESSION['auth']);
    $_SESSION['res'] = 'Вы вышли!';
    header('Location: index.php');
    die;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret</title>
</head>
<body>

<ul>
    <li><a href="index.php">Index page</a></li>
</ul>

<?php if (!empty($_SESSION['auth'])): ?>
    <h3>Эту страницу может видеть только авторизованный пользователь</h3>
    <a href="?do=logout">Logout</a>
<?php else: ?>
    <h3>Вы не авторизованы</h3>
<?php endif; ?>

<?php
if (isset($_SESSION['res'])) {
    echo "<h4>AUTH: {$_SESSION['res']}</h4>";
    unset($_SESSION['res']);
}
?>
</body>
</html>
