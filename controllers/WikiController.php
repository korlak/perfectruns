<?php

namespace controllers;

use core\Controller;
use core\Template;
use core\Core;
use models\Games;


class WikiController extends Controller
{
    public function actionAdd()
    {
        return $this->render('');
    }

    public function actionIndex()
    {
        $db = Core::get()->db;
        return $this->render('views/wiki/view.php');
    }
}