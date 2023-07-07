<?php
if (isset($_GET['do']) && $_GET['do'] === 'reset') {
    setcookie('count', '', time() - 3600, '/');
    header('Location: index.php');
    die;
}

isset($_COOKIE['count'])
    ? setcookie('count', ++$_COOKIE['count'], time() + 3600, '/')
    : setcookie('count', 1, time() + 3600, '/');

echo "Столько раз вы посетили страницу: " . ($_COOKIE['count'] ?? 1);

echo '<p><a href="?do=reset">Сброс</a></p>';