<?php
/** @var string $Title */
/** @var string $Content */

$this->Title = "Список вікі";
if(empty($Title))
    $Title = '';
if(empty($Content))
    $Content = '';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title><?= $Title ?></title>
</head>
<body>
<header style="border: 1px solid black;padding: 10px;margin: 10px">
    HEADER
    <br>
    <a href="http://perfectruns/">Logotype link</a>
    <a href="http://perfectruns/category">Category games</a>
    <a href="http://perfectruns/games">All games</a>
    <a href="http://perfectruns/wiki/index">Wiki Index</a>
    <a href="http://perfectruns/wiki/add">Wiki Add</a>
    <br>
    <ul style="text-decoration: none">
        <li><a href="/users/login">Вхід</a></li>
        <li><a href="/users/logout">Вихід</a></li>
        <li><a href="/users/register">Зареєструватись</a></li>
    </ul>
    <?php echo "Сесія:"; var_dump($_SESSION)?>
</header>
<div style="border: 1px solid black;padding: 10px;margin: 10px">
    <?= $Content ?>
</div>
<footer style="border: 1px solid black;padding: 10px;margin: 10px">FOOTER


</footer>
</body>
</html>