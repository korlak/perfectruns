<?php
/** @var string $Title */
/** @var string $Content */

$this->Title = "Список вікі";
if (empty($Title))
    $Title = '';
if (empty($Content))
    $Content = '';

use models\Users;

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
    <link rel="stylesheet" href="../../css/perfectruns/footer.css">
    <link rel="stylesheet" href="../../css/users/login.css">
    <link rel="stylesheet" href="../../css/users/profile.css">
    <link rel="stylesheet" href="../../css/games/games.css">
    <link rel="stylesheet" href="../../css/games/gamePage.css">
    <link rel="stylesheet" href="../../css/admin/addGame.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title><?= $Title ?></title>
</head>
<body>
<header>

        <div class="header-global">
            <div class="logo-header">
                <div style="display: flex;align-items: center;justify-content: center;height: 100%">PERFECTRUNS</div>
            </div>
            <div class="link-container">
                <a class="link-header" href="http://perfectruns/">Main Page </a>
                <a class="link-header" href="http://perfectruns/games">Games </a>
                <a class="link-header" href="http://perfectruns/users/profile">Profile </a>
                <a class="link-header" href="http://perfectruns/favorites">Favorites </a>
                <a class="link-header" href="http://perfectruns/categories">Categories</a>
                <a class="link-header" href="http://perfectruns/community">Community</a>
                <?php
                if (Users::IsUserLogged())
                    if (Users::UserName()['login'] == 'admin') :
                        ?>
                        <a class="link-header" href="http://perfectruns/admin/index">admin</a>
                    <?php endif; ?>
            </div>
            <?php if (!Users::IsUserLogged()) : ?>
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
            <?php else : ?>
                <a class="sign-up" href="/users/logout">
                    <div class="sign">
                        Log Out
                    </div>
                </a>
            <?php endif; ?>
        </div>
</header>
<main>
    <div class="Page">
        <?= $Content ?>
    </div>
</main>
<footer>
    <div class="footer">

            <div class="info">
                <p>PerfectRuns</p>
                <a class="footer-link" href="">link</a>
                <a class="footer-link" href="">link</a>
            </div>
            <div class="info">
                <p>PerfectRuns</p>
                <a class="footer-link" href="">link</a>
                <a class="footer-link" href="">link</a>
            </div>
            <div class="info">
                <p>PerfectRuns</p>
                <a class="footer-link" href="">link</a>
                <a class="footer-link" href="">link</a>
            </div>
        </div>
</footer>

</body>
</html>