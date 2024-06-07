<?php

namespace controllers;

use core\Controller;
use models\Games;

class AdminController  extends Controller
{
    public function actionIndex()
    {
        return $this->render('views/admin/index.php');
    }
    public function actionAddGame()
    {
        if($this->isPost){
            Games::addNewGame($this->post->name, $this->post->title, $this->post->about, $this->post->miniPicture, $this->post->picture);
        }
        return $this->render('views/admin/addGame.php');

    }
}