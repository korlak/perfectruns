<?php

namespace controllers;

use core\Template;

class CategoryController
{
    public function actionIndex()
    {
        $template = new Template('views/category/index.php');
        return [
            'Content' => $template->getHTML(),
            'Title' => 'Category games'
        ];
    }
}