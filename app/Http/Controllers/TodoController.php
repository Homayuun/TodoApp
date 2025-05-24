<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        Todo::create([
            'title' => $request->title,
            'completed' => false,
        ]);

        return redirect('/todos');
    }

    public function destroy($id)
    {
        Todo::destroy($id);
        return redirect('/todos');
    }

    public function complete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = true;
        $todo->save();

        return redirect('/todos');
    }

}