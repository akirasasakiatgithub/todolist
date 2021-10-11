<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::all();
        return view('index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Post::create($form);
        return redirect('/index');
        return $form;
    }

    public function update(Request $request)
    {
        $form = $request->all();
        /*unset($form['_token']);
        Post::find($form->id)->update($form);
        return redirect('/index');*/
        return $form;
    }

    public function delete(Request $request)
    {
        Post::find($request->id)->delete();
        return redirect('/index');
    }
}