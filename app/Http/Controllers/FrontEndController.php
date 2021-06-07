<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    
    
    public function home(){
        $posts = Post::orderBy('id', 'Desc')->get();
        $recentPosts = Post::with('category')->orderBy('id', 'Desc')->paginate(3);
        $postsrandom = $posts->random(2);
        return view('website.home', compact('posts', 'recentPosts','postsrandom'));
    }
    public function category($id){
        $category = Category::find($id);
        $posts = Post::where('category_id', $category->id)->paginate(3);
        return view('website.category', compact('category','posts'));
        
    }
    public function post($id){
        $posts = Post::find($id);
        $category = Category::all();
        $relate = Post::where('category_id',$posts->category_id)->whereNotIn('id',[$id])->limit(2)->get();
        return view('website.post', compact('posts','category','relate'));
    }
}
