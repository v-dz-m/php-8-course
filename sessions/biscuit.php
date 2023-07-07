<?php
session_start();
$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;

echo "<a href='index.php'>Вернуться на главную страницу</a>";