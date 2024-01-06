<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function allTodo(){
        return view("todo.todos");
    }

    public function addTodo(){
        return view("todo.add");
    }
   
}
