@extends('layouts.website')
@section('content')
        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                                <ol class="breadcrumb hidden-xs-down">
                                
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    
                                    <li class="breadcrumb-item">{{$posts->category->name}}</li>
                                    <li class="breadcrumb-item active">{{$posts->title}}</li>
                                </ol>

                                <span class="color-orange"><a href="#" title="">{{$posts->category->name}}</a></span>

                                <h3>{{$posts->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="#" title="">{{$posts->created_at->format('d/m/Y')}}</a></small>
                                    <small><a href="#" title="">by Admin</a></small>
                                    
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{$posts->image1}}" alt="" class="img-fluid">
                                <i style=" float: right">Hình ảnh: {{$posts->title}}(Nguồn:{{$posts->source}})</i>
                            </div><!-- end media -->
                            

                            <div class="blog-content">  
                                <div class="pp">
                                    <p style="color: #000; font-size:20px;">{{$posts->content}}</p>
                                   
                                    


                                </div><!-- end pp -->

                                
                            </div><!-- end content -->
                            <div class="single-post-media">
                                <img src="{{$posts->image2}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <span style="color:#000">Nguồn: </span><span><i>{{$posts->source}}</i></span>
                            <hr class="invis1">
                            
                            

                            <div class="custombox clearfix">
                                <div class="small-title"><h3>Bài viết liên quan</h3></div>
                                <hr class="invis1">
                                <div class="row">
                                @foreach($relate as $post)
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{route('website.post',$post->id)}}" title="">
                                                    <img src="{{$post->image1}}" alt="" height="100px" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="{{route('website.post',$post->id)}}" title="">{{$post->title}}</a></h4>
                                                <small><a href="#" title="">{{$post->category->name}}</a></small>
                                                <small><a href="#" title="">{{$post->created_at->format('d/m/Y')}}</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                @endforeach
                                    
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            

                            

                            <hr class="invis1">

                            
                        </div><!-- end page-wrapper -->
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
        <div class="dmtop">Scroll to Top</div>
@endsection