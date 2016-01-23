<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
	public function show($id) {
		$post = Post::find($id);
		return view('post.show', compact('post'));
	}
}
