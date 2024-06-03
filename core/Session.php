<?php

namespace core;

class Session
{
    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }
    public function setValues($assocArray)
    {
        foreach ($assocArray as $key => $value){
            $this->set($key, $value);
        }
    }
    public function get($name)
    {
        return $_SESSION[$name];
    }
    public  function remove($name)
    {
        unset($_SESSION[$name]);
    }
}