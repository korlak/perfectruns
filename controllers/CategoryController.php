<?php

namespace controllers;

use core\Controller;
use core\Template;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        return $this->render();
    }
}