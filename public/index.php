<?php

echo $query = $_SERVER['QUERY_STRING'] . '<br>' ;

require_once '../vendor/core/Router.php';

//$router = new Router();
//$router->test();

Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('posts/', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

echo '<pre>';
print_r(Router::getRoutes());
echo '</pre>';

echo '<pre>';
print_r(Router::getRoute());
echo '</pre>';

if (Router::matchRoute($query))
{
    echo '<pre>';
    print_r(Router::getRoute().'matchRoute');
    echo '</pre>';

}else{
    echo '404';
}


