<?php

namespace controllers;

use core\Controller;
use models\Games;

class AdminController extends Controller
{
    public function actionIndex()
    {
        return $this->render('views/admin/index.php');
    }

    public function actionAddGame()
    {

        if ($this->isPost) {
            $target_file2 = basename($_FILES["picture"]["name"]);

            $pathToGameImages = "images/games/{$this->post->name}";
            $pathToGamePage = "views/games/{$this->post->name}";

            $pathPicture = $pathToGameImages."/".$_FILES["picture"]["name"];

            if (!is_dir($pathToGameImages)) {
                mkdir($pathToGameImages);
            }
            if (!is_dir($pathToGamePage)) {
                mkdir($pathToGamePage);
            }
            move_uploaded_file($_FILES["picture"]["tmp_name"],$pathToGameImages."/".$target_file2);

          Games::addNewGame($this->post->name, $this->post->title, $this->post->about, $pathPicture);
        }
        return $this->render('views/admin/addGame.php');

    }

    public function actionDeleteGame()
    {

        return $this->render('views/admin/deleteGame.php');

    }

    public function actionEditGame()
    {
    }

    public function actionViewGame()
    {
    }

}