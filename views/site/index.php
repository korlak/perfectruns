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
    use core\Core;
    $arrayGames = Core::get()->db->select('games', '*', '');
    foreach ($arrayGames as $game) {
        echo ' <div class="game">' . '<div class="gameImage"></div>';
        echo ' <div class="gameName">';
        echo $game['name'] . '</div>' . '</div>';
    }
    ?>
</div>
