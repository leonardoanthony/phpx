<?php 
use src\Routes\Router;

$userRouter = new Router();

$userRouter->get('/usuario', function($request, $response) {
    $response->json();
});

$userRouter->post('/usuario/add', function($request, $response) {
    $response['json'](['message' => 'User received', 'data' => $request['params']]);
    $response->json();
});
$userRouter->post('/usuario/edit', function($request, $response) {
    $response['json'](['message' => 'User received', 'data' => $request['params']]);
});

$userRouter->put('/usuario', function($request, $response) {
    $response['json'](['message' => 'User updated', 'data' => $request['params']]);
});

$userRouter->delete('/usuario', function($request, $response) {
    $response['json'](['message' => 'User deleted']);
});

