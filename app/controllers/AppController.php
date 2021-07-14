<?php


namespace app\controllers;


use app\models\Main;
use fw\core\base\Controller;

class AppController extends Controller
{
    public $menu;
    public $meta = [];
    public function __construct($route)
    {
        parent::__construct($route);
        new Main;
        $this->menu = \R::findAll('category');
//        if ($this->route['controller'] == 'Main' && $this->route['action'] == 'test') {
//            echo '<h1>TEST</h1>';
//        };
    }

    protected function setMeta($title='', $descr='', $keywords=''){
        $this->meta['title'] = $title;
        $this->meta['descr'] = $descr;
        $this->meta['keywords'] = $keywords;
    }

}