<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        $post = Post::orderBy('id','DESC')->take(5)->get();
        $recentPosts = Post::with('category')->orderBy('id', 'DESC')->paginate(10);
        return view('website.home', compact('post', 'recentPosts'));
    }
    public function category(){
        return view('website.category');
    }
    public function post(){
        
        return view('website.post');
        
    }
}
