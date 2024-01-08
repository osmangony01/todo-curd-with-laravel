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

    public function store(Request $req)
    {
        $validateData = $req->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required'
        ]);

        
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

    public function edit($id){
        $todo = Todo::find($id);
        return view("todo.edit", ['todo' => $todo]);
    }

    public function update(Request $req, $id){

        $validateData = $req->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required'
        ]);
        
        $title = $req->title;
        $date = $req->date;
        $description = $req->description;

        $todo = Todo::find($id);
        $todo->title = $title;
        $todo->date = $date;
        $todo->description = $description;

        if($todo->save()){
            return redirect()->back()->with('success','Updated successfully');
        }
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        
        return redirect()->back()->with('success','Deleted successfully');
       
    }
   
}
