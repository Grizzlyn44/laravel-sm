<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id) {
    	$user = User::findOrFail($id);

    	return view('posts.index')->with('title'. $user->name)->with('posts', $user->posts);
    }
}
