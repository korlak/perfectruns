<?php

namespace controllers;

use core\Controller;
use core\Template;

class GamesController extends Controller
{
    public function actionIndex()
    {
        return $this->render();
    }
}