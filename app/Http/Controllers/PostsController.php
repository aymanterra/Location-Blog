<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //

    public function index()
    {

        $posts = Post::latest()
            ->get();


    	return view('posts.index',compact('posts'));

    }

    public function show(post $post)
    {
    	return view('posts.show',compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }


    public function store()
    {

        $this->validate(Request(), [

            'title' => 'required|string|max:190|min:2',
            'subtitle' => 'required|string|max:190|min:2',
            'body' => 'required|text|min:2', 

        ]);

    	auth()->user()->publish(
    		new post(request(['title','subtitle','body','lat','lng']))
		);

		return redirect()->home();
    }
}
