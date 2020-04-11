<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc'  => 'required'
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->desc = $request->desc;
        $todo->save();
        
        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {

        $this->validate($request, [
            'title' => 'required',
            'desc'  => 'required'
        ]);

        $todo->title = $request->title;
        $todo->desc = $request->desc;
        $todo->save();
        return redirect('/todos');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', ['todo' => $todo]);
    }

    public function complete(Todo $todo)
    {
        $todo->completed = 1;
        $todo->save();
        return redirect('/todos');
    }
}
