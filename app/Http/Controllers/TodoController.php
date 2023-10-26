<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todolist::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = new Todolist();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function edit($id)
    {
        $todo = Todolist::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todolist::findOrFail($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->save();
        return redirect()->route('todos.index');
    }

    public function destroy($id)
    {
        $todo = Todolist::findOrFail($id);
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
