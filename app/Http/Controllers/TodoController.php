<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    
    public function allTodo(){
        $todos = Todo::all();
        return view("todo.todos",['todos' => $todos]);
    }

    public function addTodo(){
        return view("todo.add");
    }

    public function store(Request $req){
        $title = $req->title;
        $date = $req->date;
        $description = $req->description;

        $todo = new Todo();
        $todo->title = $title;
        $todo->date = $date;
        $todo->description = $description;

        if($todo->save()){
            return redirect()->back()->with('success','Inserted successfully');
        }
    }
   
}
