<?php 

function Render($component, $props){
    include "./src/templates/{$component}.php";
}

 //Render('Header', ['title' => 'Zito Games']); ?>