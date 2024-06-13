<?php
$this->Title = "Профіль";
use core\Core;
?>
<div class="centerObject">
    <div>Логін:<?php echo Core::get()->session->get('user')['login']; ?></div>
    <div>Нікнейм:<?php echo Core::get()->session->get('user')['nickname']; ?></div>
</div>

