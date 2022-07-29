<?php


$title= $_POST['title'] ? $_POST['title'] : '';
$description= $_POST['description'] ? $_POST['description'] : '';
$completed= $_POST['completed'];

$app['database']->insertInto('tasks',

    [

    'title'=> $title, 

    'description'=> $description, 

    'completed'=> $completed

    ]

);

header('Location: /tasks');