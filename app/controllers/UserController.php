<?php


namespace app\controllers;


use app\models\User;
use fw\core\base\View;

class UserController extends AppController
{
    public function signupAction() {
        if(!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form-data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if ($user->save('user')) {
                    $_SESSION['success'] = 'USPEH!';
            }else{
                    $_SESSION['success'] = 'NET!';
            }
            redirect();
        }
        View::setMeta('Регистрация');

    }

    public function loginAction() {
        if(!empty($_POST)) {
            $user1 = new User();
            debug($_SESSION);

            if ($user1->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
            } else {
                $_SESSION['error'] = 'Неверный логин\пароль';
            }
        }
        View::setMeta('Вход');
    }

    public function logoutAction() {

    }
}