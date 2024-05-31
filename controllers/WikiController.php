<?php

namespace controllers;

use core\Controller;
use core\Template;
use core\Core;

class WikiController extends Controller
{
    public function actionAdd()
    {
        return $this->render();
    }

    public function actionIndex()
    {
        $db = Core::get()->db;
//        $rows = $db->select("games", ["text", "title", "date"], [
//            'id' => 2
//        ]);
//        var_dump($rows[0]['title']);
//        $db->insert('games', [
//                'title' => 'Заголовок',
//                'text' => 'text',
//                'short_text' => 'short text',
//                'date' => '2024.05.03'
//
//
//            ]);
        // $db->delete('games',['id' => 4]);
//        $db->update('games', [
//            'title' => '!!!!!'
//        ],
//            [
//                'id' => 1
//            ]);

        return $this->render();
    }
}