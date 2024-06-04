<?php
/** @var string $Title */
/** @var string $Content */

$this->Title = "Список вікі";
if (empty($Title))
    $Title = '';
if (empty($Content))
    $Content = '';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="../../css/perfectruns/header.css">
    <link rel="stylesheet" href="../../css/perfectruns/welcome.css">
    <link rel="stylesheet" href="../../css/perfectruns/gamesList.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title><?= $Title ?></title>
</head>
<body>
<div class="page">

    <header>
        <div class="header-global">
            <div class="logo">
                <img src="" alt="">
            </div>
            <div class="link-container">
                <a class="link-header" href="http://perfectruns/games">Games
                </a>
                <a class="link-header" href="http://perfectruns/">Games
                </a>
                <a class="link-header" href="http://perfectruns/">Games
                </a>
                <a class="link-header" href="http://perfectruns/">Games
                </a>
                <a class="link-header" href="http://perfectruns/">Games
                </a>

                <a class="link-header" href="/Categories/">Categories</a>
                <a class="link-header" href="/Community/">Community</a>
            </div>
            <a class="sign-in" href="/users/login">
                <div class="sign">
                    LOG IN
                </div>
            </a>
            <a class="sign-up" href="/users/register">
                <div class="sign">
                    REGISTER
                </div>
            </a>
    </header>
    <div>
        <!--    --><?php //echo "Сесія:"; var_dump($_SESSION)?>
    </div>
    <div>
        <?= $Content ?>
    </div>
    <footer>


    </footer>
</div>

</body>
</html>