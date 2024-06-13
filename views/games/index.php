<?php

use models\Games;

$this->Title = "Список ігор";
?>
<!--
<a href="">Terraria</a><br>
<a href="">Elden Ring</a><br>
<a href="">Geometry Dash</a><br>
<a href="">Outward</a><br>
<a href="">Devil May Cry 5</a><br>
<a href="">Відьмак 3</a><br>
<a href="">Sekiro</a><br>
<a href="">Phasmophobia</a><br>
<a href="">CODE VEIN</a><br>
<a href="">TES V Skyrim</a><br>
<a href="">Salt and Sanctuary</a><br>
<a href="">Hollow Knight</a><br>
<a href="">The Forest</a><br>
<a href="">Portal 2</a><br>
<a href="">Undertale</a><br>
-->


<div class="gameList">
    <div class="search"></div>
    <div class="games">
        <?php foreach (Games::getGamesNameAndPic() as $item) : ?>
        <div class="game">
            <img src="<?=$item[1] ?>" class="image-game"  alt="Image Not Found">
            <?= $item[0] ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
