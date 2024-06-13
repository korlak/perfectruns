<?php

namespace controllers;

use \core\Controller;
use core\Core;
use http\Client\Curl\User;
use \models\Users;
class UsersController extends Controller
{
    public function actionProfile()
    {
        return $this->render('');

    }
    public function actionLogin()
    {

        if(Users::IsUserLogged()){
            return $this->redirect('/');
        }
        if($this->isPost){

            $user = Users::FindByLoginAndPassword($this->post->login, $this->post->password);

            if(!empty($user)){

                Users::LoginUser($user);
                return $this->redirect('/');
            }
        }
         else
        {
            $this->addErrorMessage('Неправильний логін або пароль');
            $this->isPost= false;
            $_POST = null;
        }
        return $this->render();
    }
    public function actionRegister()
    {
        if($this->isPost) {
            $user = Users::FindByLogin($this->post->login);
            if (!empty($user)) {
                $this->addErrorMessage('Користовач з таким логіном вже існує');
            }

            if(strlen($this->post->login) === 0){
                $this->addErrorMessage("Логін не вказано");
            }
            if(strlen($this->post->password) === 0){
                $this->addErrorMessage("Пароль не вказано");
            }
            if ($this->post->password != $this->post->password2) {
                $this->addErrorMessage('Паролі не співпадають');
            }
            if(strlen($this->post->nickname) === 0){
                $this->addErrorMessage("Нікнейм не вказано");
            }
            if(!$this->isErrorMessageExistis()){
                Users::RegisterUser($this->post->login, $this->post->password, $this->post->nickname);
                return $this->redirect('/users/registersuccess');
            }
        }
        return $this->render();
    }
    public function actionRegistersuccess()
    {
        return $this->render();
    }
    public function actionLogout()
    {
        if(Users::IsUserLogged())
        {
            Users::LogoutUser();
            return $this->redirect('/users/login');
        } else{
            return $this->redirect('/');

        }
    }

}