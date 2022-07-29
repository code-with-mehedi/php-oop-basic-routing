<?php

$query= $app['database']->selectAll('tasks');
require 'views/tasks.view.php';