<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use App\Repositories;
class PostController extends Controller
{
    // /**
    //  * @var PostRepositoryInterface|\App\Repositories
    //  */
    // protected $postRepository;
    // public function __construct(PostRepository $postRepository)
    // {
    // $this->postRepository = $postRepository;
    // }
    // /**
    //  * Show all post
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(20);
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image1' => $request->image1,
            'image2' => $request->image2,
            'hot' => $request-> hot,
            'source' => $request-> source,
            'category_id' => $request->category,
            'published_at' => Carbon::now(),
       ]);
       return back()->with('success','Create success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image1= $request->image1;
        $post->image2= $request->image2;
        $post->hot = $request-> hot;
        $post->source = $request-> source;
        $post->category_id= $request->category;
        $post->published_at = Carbon::now();
        $post->save();
        return back()->with('success','Update success!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post){
            $post->delete();
            return back()->with('success','Delete success!!');
        }
    }
}
