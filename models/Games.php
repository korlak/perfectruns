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
    public static function FindByName($name)
    {
        $rows = self::findByCondition(['name' => $name]);
        if (!empty($rows)) {
            return $rows[0];
        } else {
            return null;
        }
    }
    public static function addNewGame($name, $title, $about, $picture){
        $game = new Games();
        $game ->name = $name;
        if(!is_null(self::FindByName($name))){
            echo "Гра вже існує на сайті";
        }
        $game->title = $title;
        $game->about = $about;
        $game->picture = $picture;
        $game->save();
    }

    public static function getAllGames()
    {
        return self::getAllTable();
    }
    public static function getGamesName(){
        $array = [];
        for ($i = 0; $i < count(self::getAllGames()); $i++){
            $array[$i] = self::getAllGames()[$i]["name"];
        }
        return $array;
    }
    public static function getGamesPicture(){
        $array = [];
        for ($i = 0; $i < count(self::getAllGames()); $i++){
            $array[$i] = self::getAllGames()[$i]["picture"];
        }
        return $array;
    }
    public static function getGamesNameAndPic(){
        $array = [];
        for ($i = 0; $i < count(self::getAllGames()); $i++){
            $array[$i][0] = self::getAllGames()[$i]["name"];
            $array[$i][1] = self::getAllGames()[$i]["picture"];
        }
        return $array;
    }
}