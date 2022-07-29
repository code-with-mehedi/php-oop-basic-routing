<?php


// $router-> define([

//     ''=> 'controllers/index.php',

//     'about'=> 'controllers/about.php',

//     'about-culture'=> 'controllers/about-culture.php',

//     'contact'=> 'controllers/contact.php',

//     'tasks'=> 'controllers/tasks.php',

//     'todo' => 'controllers/todo.php', // only for post type.

// ]);

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about-culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('tasks', 'controllers/tasks.php');
$router->post('todo', 'controllers/todo.php');
