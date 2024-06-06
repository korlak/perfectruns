<?php

namespace models;

use core\Model;
/**
 * @property  int $id id;
 * @property  string $name заголовоку;
 * @property  string $title заголовоку;
 * @property  string $about текст;
 * @property  string $miniPicture короткий текст;
 * @property  string $picture дата;
 */
class Games extends Model
{
    public static $tableName = 'games';
    public static function addNewGame($name, $title, $about, $miniPicture, $picture){
        $game = new Games();
        $game ->name = $name;
        $game->title = $title;
        $game->about = $about;
        $game->miniPicture = $miniPicture;
        $game->picture = $picture;
        var_dump($game);
        $game->save();
    }
}