@extends('layouts.website')
@section('content')
<section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                @foreach ($postsrandom as $post)
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="{{$post->image1}}" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="{{route('website.post',$post->id)}}" title="">{{$post->category->name}}</a></span>
                                        <h4><a href="{{route('website.post',$post->id)}}" title="">{{$post->title}}</a></h4>
                                        <small><a href="{{route('website.post',$post->id)}}" title="">{{$post->created_at->format('d/m/Y')}}</a></small>
                                        <small><a href="{{route('website.post',$post->id)}}" title="">by Admin</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->
                 @endforeach
                    
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            @foreach($recentPosts as $post)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('website.post',$post->id)}}" title="">
                                                <img src="{{$post->image1}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h1><a href="{{route('website.post',$post->id)}}" title="">{{$post->title}}</a></h1>
                                        
                                        <p class="firstsmall"><a class="bg-orange" href="{{route('website.post',$post->id)}}" title="">{{$post->category->name}}</a></p>
                                        <small><a href="{{route('website.post',$post->id)}}" title="">{{$post->created_at->format('d/m/Y')}}</a></small>
                                        <small><a href="{{route('website.post',$post->id)}}" title="">by Admin</a></small>
                                        
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            @endforeach
                            
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        {{$recentPosts->links()}}

                        
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        @endsection