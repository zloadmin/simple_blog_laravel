<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
	
	public function index()
    {
        $posts = Post::paginate(15);

        return view('welcome', ['posts' => $posts]); 
    }

	public function show($id) 
	{
		$post = Post::find($id);
		var_dump($post);
		return view('post.show', compact('post'));
	}


}
