<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $countpost = Post::all()->count();
        $countcategory = Category::all()->count();
        return view('admin.dashboard.index', compact('countpost', 'countcategory'));
    }
}
