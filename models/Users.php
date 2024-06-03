<?php

namespace models;

use core\Core;
use core\Model;
use Couchbase\User;

/**
 * @property  int $id id;
 * @property  string $login логін;
 * @property  string $password пароль;
 * @property  string $nickname нік;
 */
class Users extends Model
{
    public static $tableName = 'users';

    public static function FindByLoginAndPassword($login, $password)
    {
        $rows = self::findByCondition(['login' => $login, 'password' => $password]);
        if (!empty($rows)) {
            return $rows[0];
        } else {
            return null;
        }
    }
    public static function FindByLogin($login)
    {
        $rows = self::findByCondition(['login' => $login]);
        if (!empty($rows)) {
            return $rows[0];
        } else {
            return null;
        }
    }
    public static function IsUserLogged()
    {
        return !empty(Core::get()->session->get('user'));
    }

    public static function LoginUser($user)
    {
        Core::get()->session->set('user', $user);
    }

    public static function LogoutUser()
    {
        Core::get()->session->remove("user");

    }
    public static function RegisterUser($login, $password, $nickname){
        $user = new Users();
        $user->login = $login;
        $user->password = $password;
        $user->nickname = $nickname;
        $user->save();
    }

}