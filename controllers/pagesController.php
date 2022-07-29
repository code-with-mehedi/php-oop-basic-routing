<?php

class PagesController 
{

    public function home()
    {
        $query= App::get('database')->selectAll('tasks');

        return view('index', ['query'=>$query]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function tasks()
    {
        $query= App::get('database')->selectAll('tasks');

        return view('tasks', ['query'=>$query]);
    }

    public function todo()
    {
        $title= $_POST['title'] ? $_POST['title'] : '';
        $description= $_POST['description'] ? $_POST['description'] : '';
        $completed= $_POST['completed'];

        App::get('database')->insertInto('tasks',

            [

            'title'=> $title, 

            'description'=> $description, 

            'completed'=> $completed

            ]

        );

        header('Location: /tasks');
    }
    

}