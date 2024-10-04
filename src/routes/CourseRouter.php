<?php
use src\Routes\Router;

$courseRouter = new Router();

$courseRouter->get('/course/getById', function($request, $response){
    $response['json'](['1' => 'ADM', '2' => 'CON', '3' => 'DEV']);
});

// $courseRouter->get('/course/listBySchool', [CourseController, 'getCoursesBySchoolIdMeuOvo']);