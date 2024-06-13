<?php
/** @var array $game */


use models\Games;

$path = $this->controller->get->array['route'];
$arr = explode('/', $path);
if (isset($arr[2])) {
    $gameId = $arr[2];
    $page = Games::findById($gameId);
    if (!is_null($page)) {
        $title_logo = "/" . $page['picture'];

        $title_text = $page['title'];
        $name = $page['name'];
        $about = $page['about'];
    } else {
        header('Location: /views/site/page404.php');
    }
} else {
    header('Location: /views/site/page404.php');
}

?>

<div class="gamePage">
    <div class="title-frame">
        <div class="title-logo">
            <img src="<?= $title_logo ?>" alt="">
        </div>
        <div class="title-text">
            <h1>
                <?= $title_text ?>
            </h1>
        </div>
    </div>
    <div class="about">
        <p>
            <?= $about ?>
        </p>
    </div>
    <!--
    <div class="achievements">
        <div class="achiv">
            <div class="titleAch"></div>
            <div class="aboutAch">VERY DIFFICULT</div>
            <div class="ach-img"></div>
            <div class="btnAchCompleted"></div>
            <div class="btnGuides"></div>
        </div>
</div>
        -->
</div>
