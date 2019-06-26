<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = \App\thread::all();
        return view('threads.index', compact('threads'));
    }

    public function create()
    {


        return view('threads.create', compact('create'));
    }

    public function store()
    {
        $threads = new \App\thread();

        $threads->title = request('title');
        $threads->description = request('description');
        $threads->user_id = auth()->id();
        $threads->save();

        return redirect('/threads');
    }


    public function show($id)
    {
        $thread = \App\thread::findOrFail($id);

        return view('threads.show')
            ->with('thread', $thread);
    }
}
