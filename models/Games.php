<?php

namespace models;
use core\Model;
class Games extends Model
{
    public $id;
    public $title;
    public $text;
    public $short_text;
    public $date;
    public $table = 'games';
    public function __construct()
    {

    }

}