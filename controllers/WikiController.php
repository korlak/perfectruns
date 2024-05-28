<?php

namespace controllers;
use core\Template;
class WikiController
{
    public function actionAdd()
    {
        $template = new Template('views/wiki/add.php');
        return [
            'Content' => $template->getHTML(),
            'Title' => 'Додавання'
        ];
    }
    public function actionIndex()
    {
        $template = new Template('views/wiki/index.php');
        return [
            'Content' => $template->getHTML(),
            'Title' => 'Wiki 2'
        ];
    }
    public function actionView($params)
    {
        $template = new Template('views/wiki/view.php');
        return [
            'Content' => 'Wiki Action',
            'Title' => 'Wiki 1'
        ];

    }

}