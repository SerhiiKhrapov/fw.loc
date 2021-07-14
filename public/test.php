<?php

require 'rb.php';


//$db = require '../config/config_db.php';
//R::setup($db['dsn'], $db['user'], $db['pass'], $options);
//R::freeze(TRUE);
//R::fancyDebug(TRUE);
//var_dump(R::testConnection());

//Create
//$category = R::dispense('category');
//$category->title = 'Категория 3';
//$id = R::store($category);
//var_dump($id);

//Read
//$category = R::load('category', 2);
//print_r($category);
//echo $category->title;
//echo $category['title'];

//Update
//$category = R::load('category', 3);
//$category->title = 'Категория 3';
//R::store($category);
//echo $category->title;

//$category = R::dispense('category');
//$category->title = 'Категория 3!!!!';
//$category->id = 3;
//R::store($category);

//Delete
//$category = R::load('category', 2);
//R::trash($category);
//R::wipe('category');

//$cats = R::findAll('category', 'id > ?', [2]);
//$cats = R::findAll('category', "title LIKE ?", ['%cat%']);
//$cats = R::findOne('category', 'id = 2');
//echo '<pre>';
//print_r($cats);

