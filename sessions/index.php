<?php
session_start();
if (!empty($_SESSION['count'])) {
    echo "<p>Вы посетили проверочную страницу {$_SESSION['count']} раз(а)!</p>";
}
echo "<a href='biscuit.php'>Перейти на проверочную страницу</a>";