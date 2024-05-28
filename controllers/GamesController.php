<?php

namespace controllers;

use core\Template;

class GamesController
{
    public function actionIndex()
    {
        $template = new Template('views/games/index.php');
        return [
            'Content' => $template->getHTML(),
            'Title' => 'All games'
        ];
    }
}