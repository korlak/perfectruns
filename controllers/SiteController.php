<?php

namespace controllers;
use core\Template;
class SiteController
{
    public function actionIndex()
    {
        $template = new Template('views/site/index.php');
        return [
            'Content' => $template->getHTML(),
            'Title' => 'MAIN'
        ];
    }


}