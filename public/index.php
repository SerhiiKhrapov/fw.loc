<?php


use fw\core\Router;

define('DEBUG', 1);
define('WWW', __DIR__);
define('ROOT', dirname(__DIR__));
define('CACHE', dirname(__DIR__) . '/tmp/cache');
define('CORE', dirname(__DIR__) . '/vendor/fw/core');
define('APP', ROOT . '/app');
define('LAYOUT', 'blog');
define('LIBS', ROOT . '/vendor/fw/libs');

//spl_autoload_register(function($class){
//   $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
//   if(is_file($file)) {
//       require_once $file;
//   }
//});


$query = rtrim($_SERVER['QUERY_STRING'], '/');

require '../vendor/fw/libs/functions.php';
require __DIR__ . '/../vendor/autoload.php';

new \fw\core\App;

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)?$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)?$', ['controller' => 'Page', 'action' => 'view']);

// default routes
Router::add('^admin$', ['controller' => 'User', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

//debug(Router::getRoutes());

Router::dispatch($query);
fw\core\Registry::instance();
