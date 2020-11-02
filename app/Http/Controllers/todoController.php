<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('posts', ['todos' => $todos]);
    }
    public function viewonetodo(Todo $todo)
    {
        
        return view('onetodo', ['todos' => $todo]);
    }
    public function create()
    {
        return view('createpost');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();
        
        $request->session()->flash('success','Todo created successfully');

        return redirect('posts');

    }
    public function edit(Todo $todo)
    {
        
        return view('edit')->with('todo',$todo);

    }
    public function update(Request $request , Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $todo->title = $request->title;
        $todo->description = $request->description;

        $todo->save();
        $request->session()->flash('success','Todo updated successfully');

        return redirect('posts');
    }
    public function delete(Todo $todo)
    {
        $todo->delete();

        session()->flash('success','Todo deleted successfully');

        return redirect('posts');
    }
    public function completed(Todo $todo)
    {
        $todo->completed = 1;
        $todo->save();
        session()->flash('success','Todo completed successfully');
        return redirect('posts');
    }
}
