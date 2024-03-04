<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index',[
            'title' => decrypt(auth()->user()->name) . ' Dashboard',
            'user' => User::where('name', auth()->user()->name)->first(),
            'posts' => Post::where('user_id', auth()->user()->id)->latest()->take(5)->get()
        ]);
    }

    public function show(Post $post){
        return view('dashboard.posts.detail', [
            'title' => $post->title,
            'post' => $post
        ]);
    }
}
