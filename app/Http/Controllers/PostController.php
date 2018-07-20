<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Tag;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Requests\SavePostRequest;

class PostController extends Controller {

	public function index() {
		$posts = Post::orderBy('created_at', 'desc')->get();
		return view('posts.index')->with('posts', $posts);
	}

    public function show($id) {
    	$post = Post::findOrFail($id);
    	return view('posts.show')->with('post', $post);
    }

    public function edit($id) {

        $post = Post::findOrFail($id);
        $this->authorize('edit-post', $post);
        $tags = Tag::all();

        $post->tags;

    	return view('posts.edit')->with('title', 'Edit post')->with('post', $post)->with('tags', $tags );
    }

    public function create() {
        $tags = Tag::all();
        return view('posts.create')->with('title', 'Add new post')->with('tags', $tags);
    }

    public function store(SavePostRequest $request) {

        $post = Auth::user()->posts()->create($request->all());

        $post->tags()->sync($request->get('tags') ?: []);

        return redirect()->route('post.show' , $post->id);

    }

    public function update(SavePostRequest $request, $id) {

        $post = Post::findOrFail($id);

        $this->authorize('edit-post', $post);

        $post->update( $request->all() );

        $post->tags()->sync($request->get('tags') ?: []);

        return redirect()->route('post.show', $post->id);

    }
}
