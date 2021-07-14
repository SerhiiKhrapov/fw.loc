<?php


namespace app\controllers\admin;


use fw\core\base\View;

class UserController extends AppController
{
    public $layout = 'admin';
    public function indexAction() {
//        echo __METHOD__;
        View::setMeta('Админка :: Главная страница', 'Описание админки', 'ключевики');
        $test = 'Тестовая переменная';
        $data = ['test', '2'];
        /*$this->set([
            'test' => $test,
            'data' => $data,
        ]);*/
        $this->set(compact('test', 'data'));
    }

    public function testAction() {
//        echo __METHOD__;
        $this->layout = 'admin';
    }
}