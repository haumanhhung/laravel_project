@extends('layouts.website')
@section('content')
<section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="{{ asset('website')}}/upload/tech_01.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                        <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="{{ asset('website')}}/upload/tech_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                        <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                        <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="{{ asset('website')}}/upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                        <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
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
                                            <a href="{{route('website.post', ['id'  =>$post->id])}}" title="">
                                                <img src="{{$post->image1}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h1><a href="{{route('website.post')}}" title="">{{$post->title}}</a></h1>
                                        
                                        <p class="firstsmall"><a class="bg-orange" href="{{route('website.post')}}" title="">{{$post->category->name}}</a></p>
                                        <small><a href="tech-single.html" title="">{{$post->created_at->format('d/m/Y')}}</a></small>
                                        <small><a href="tech-author.html" title="">by Admin</a></small>
                                        <!-- <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small> -->
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