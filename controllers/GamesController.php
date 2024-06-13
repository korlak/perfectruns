<?php

namespace controllers;

use core\Controller;
use core\Template;
use models\Games;

class GamesController extends Controller
{
    public function actionIndex()
    {
        return $this->render();
    }

    public function actionGamePage()
    {
        return $this->render('views/games/gamePage.php');

    }
}