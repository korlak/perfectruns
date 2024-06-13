<?php
use models\Users;
use core\Controller;

if(Users::UserName()['login'] !== 'admin') {
    return Controller::redirect('/');
}
else
?>
<div><a href="/admin/addGame"> Додати гру</a></div>
