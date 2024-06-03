<?php

namespace models;

use core\Model;
/**
 * @property  int $id id;
 * @property  string $title заголовоку;
 * @property  string $text текст;
 * @property  string $short_text короткий текст;
 * @property  string $date дата;
 */
class Games extends Model
{
    public static $tableName = 'games';
}