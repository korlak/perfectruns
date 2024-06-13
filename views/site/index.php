<?php
$this->Title = "PerfectRuns";
?>
<div class="welcome">
    <div class="welcome-background">
        <div class="welcome-background-layer">
            <div class="welcome-word-layer">
                <div class="welcome-word1">
                    WELCOME TO PERFECTRUNS
                </div>
                <span class="welcome-word2">We have over 1000 guides to help you get achievements for
                different games</span>
            </div>
        </div>
    </div>
</div>

<div class="gamePages">
    <?php

    use models\Games;

    foreach (Games::getGamesNameAndPic() as $item) : ?>
        <a class="gameLink" href="/games/gamePage/<?= $item[2] ?>">
            <div class="gameMP">
                <img src="<?= $item[1] ?>" class="image-game" alt="Image Not Found">
                <div class="gameName"> <?= $item[0] ?></div>
            </div>
        </a>
    <?php endforeach; ?>


</div>
