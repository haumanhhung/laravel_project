@extends('layouts.website')
@section('content')
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-star bg-orange"></i> {{$category->name}}</h2> </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            
                            <li class="breadcrumb-item active">{{$category->name}}</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                                

                                @foreach($posts as $post)
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
                        
                        <hr class="invis">

                        {{$posts->links()}}
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <div class="dmtop">Scroll to Top</div>
@endsection