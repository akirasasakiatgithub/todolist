<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::all();
        return view('index', ['items' => $items]);
    }

    public function add(Request $request, PostRequest $postrequest)
    {
        $form = $request->all();
        unset($form['_token']);
        Post::create($form);
        return redirect('/index');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        $id = Post::find($request->id);
        $id->update($form);
        return redirect('/index');
    }

    public function delete(Request $request)
    {
        Post::find($request->id)->delete();
        return redirect('/index');
    }
}