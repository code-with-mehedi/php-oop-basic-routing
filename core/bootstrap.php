<?php

// Bootstrap file handle the database connection.

// $app=[];

// $app['config'] = require './config.php';

// reformat app array to DI container

App::bind('config', require './config.php');

// require 'core/database/Connection.php';

// require 'core/database/QueryBuilder.php';

// require 'core/router.php';

// require 'core/request.php';

App::bind('database',new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name,$data=[]) 
{
    extract($data);
    return require "views/{$name}.view.php";
}