<?php 
use src\Routes\Router;
include './src/routes/UserRouter.php';
include './src/routes/CourseRouter.php';

$router = new Router();

$router->get('/', function($request, $response) {
    $response->send('hello world');
});

$router->use($userRouter);
$router->use($courseRouter);

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);