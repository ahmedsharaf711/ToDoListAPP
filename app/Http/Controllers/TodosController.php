<?php

namespace App\Http\Controllers;
use App\Todo;
use Session;
use App\Http\Requests\TodoRequest;

use Illuminate\Http\Request;

class TodosController extends Controller
{

   
    public function index()
    {
         $todos = Todo::all();
        return view('todos.index' , compact('todos'));
    }


    ########################################################



    public function show(Todo $todo)
    {
       // $todo = Todo::find($todo);
        return view('todos.show' , compact('todo'));
    }


    ############################################################



    public function create()
    {
     return view('todos.create');
    }


    #############################################################




    public function store(TodoRequest $request)
    {
         $todo = new Todo();
         $todo->title = $request->input('todoTitle');
         $todo->description = $request->input('todoDescription');
         $todo->completed = false;
         $todo->save();
         return redirect('/')->with('status' , 'Todo Created Successfully');
    }

    #################################################################################






    public function edit(Todo $todo)
    {

        //$todo = Todo::find($todo);
        return view('todos.edit' , compact('todo'));
    }



    ########################################################################################







    public function update(TodoRequest $request , Todo $todo)
    {
         $todo->title = $request->input('todoTitle');
         $todo->description = $request->input('todoDescription');
         $todo->completed = false;
         $todo->save();
         return redirect('/')->with('status' , 'Todo Updated Successfully');
    }

    ############################################################################





    public function delete( Todo $todo)
    {

       // $todo = Todo::find($todo);
        $todo->delete();
        return redirect('/')->with('status' , 'Todo Deleted Successfully');
    }



    ##########################################################################




    public function complete( Todo $todo)
    {

       // $todo = Todo::find($todo);
        $todo->completed = true;
        $todo->save();
        session()->flash('status' , 'Todo Completed');
        return redirect('/');
    }



}
