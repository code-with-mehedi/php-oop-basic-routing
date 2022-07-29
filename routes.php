<?php


// $router-> define([

//     ''=> 'controllers/index.php',

//     'about'=> 'controllers/about.php',

//     'about-culture'=> 'controllers/about-culture.php',

//     'contact'=> 'controllers/contact.php',

//     'tasks'=> 'controllers/tasks.php',

//     'todo' => 'controllers/todo.php', // only for post type.

// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('tasks', 'PagesController@tasks');
$router->post('todo', 'PagesController@todo');
$router->get('login', 'loginController@login');
