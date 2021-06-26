@extends('layouts.website')
@section('content')
<section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                @foreach ($postsrandom as $post)
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             

                             <a href="{{route('website.post',$post->id)}}"><img src="{{$post->image1}}" alt="" height="400px"  ></a>
                             
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
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">TIN MỚI <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            @foreach($recentPosts as $post)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('website.post',[$post->id])}}" title="">
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
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            

                            <div class="widget">
                                <h2 class="widget-title">TIN NỔI BẬT</h2>
                                <div class="trend-videos">
                                @foreach($postshot as $post)
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{route('website.post',$post->id)}}" title="">
                                                <img src="{{$post->image1}}" alt="" class="img-fluid">
                                                
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="{{route('website.post',$post->id)}}" title="">{{$post->title}}</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr>
                                @endforeach
                                    

                                    
                                </div><!-- end videos -->
                            </div><!-- end widget -->

                            

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>27k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>98k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>17k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>22k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        
        @endsection