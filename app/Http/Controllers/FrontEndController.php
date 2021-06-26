<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
class FrontEndController extends Controller
{
    
    
    public function home(){
        $posts = Post::get();
        $recentPosts = Post::orderBy('id', 'Desc')->paginate(6);
        $postsrandom = $posts->random(2);
        $postshot = Post::where('hot', '=', 1)->orderBy('id', 'Desc')->limit(5)->get();
        return view('website.home', compact('posts', 'recentPosts','postsrandom','postshot'));
    }
    public function category($id){
        $category = Category::find($id);
        $posts = Post::where('category_id', $category->id)->paginate(6);
        $postshot = Post::where('hot', '=', 1)->orderBy('id', 'Desc')->limit(5)->get();
        return view('website.category', compact('category','posts','postshot'));
        
    }
    public function post($id){
        $posts = Post::find($id);
        $category = Category::all();
        $postshot = Post::where('hot', '=', 1)->orderBy('id', 'Desc')->limit(5)->get();
        $relate = Post::where('category_id',$posts->category_id)->whereNotIn('id',[$id])->limit(2)->get();
        return view('website.post', compact('posts','category','relate','postshot'));
    }
    
}
