<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;

class DashboardController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        $user = Auth::user();
        return view('users.dashboard.dashboard')->with('user', $user);
    }

    public function allPosts()
    {
        $posts = Post::all();
        return view('users.dashboard.allPost')->with('posts', $posts);
    }

    public function myPosts()
    {
        $userId = Auth()->user()->id;
        $posts = Post::where('user_id', $userId);
        return view('users.dashboard.myPost')->with('posts', $posts);
    }

    public function profile()
    {
        $user = Auth()->user;
        dd($user);
        return view('users.dashboard.profile')->with('user', $user);
    }
}
