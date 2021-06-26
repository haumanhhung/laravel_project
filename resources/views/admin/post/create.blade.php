@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('CreatePost')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('website')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('post.index')}}">{{__('ListPost')}}</a></li>
              <li class="breadcrumb-item active">{{__('CreatePost')}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                  <div class="d-flex justify-content-between">
                      <h3 class="card-title">{{__('CreatePost')}}</h3>
                      <a href="{{route('post.index')}}" class="btn btn-primary">{{__('ListPost')}}</a>
                      
                   </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
                        <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                               @if(Session::has('success'))
                              <div class="alert alert-success">
                                  {{Session::get('success')}}
                                  @php
                                      Session::forget('success');
                                  @endphp
                              </div>
                              @endif
                              @if(Session::has('fail'))
                              <div class="alert alert-danger">
                                  {{Session::get('fail')}}
                                  @php
                                      Session::forget('fail');
                                  @endphp
                              </div>
                              @endif
                              @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                                <div class="form-group">
                                    <label for="name">{{__('Title')}}</label>
                                    <input type="name" name="title" class="form-control" id="title" placeholder="Enter Title Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Content')}}</label>
                                    
                                    <textarea  placeholder="Enter Content Post"name="content" class="form-control" id="content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Image')}}</label>
                                    <input type="name" name="image1" class="form-control" id="image1" placeholder="Enter Url image1 Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Image')}}</label>
                                    <input type="name" name="image2" class="form-control" id="image2" placeholder="Enter Url image2 Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Hot')}}</label>
                                    
                                    <select name="hot" id="hot" class="form-control">
                                        <option value="" style="display:none" selected>Select News Hot</option>
                                        
                                           <option value="1">HOT</option>
                                           <option value="0">NO HOT</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Source')}}</label>
                                    <input type="name" name="source" class="form-control" id="source" placeholder="Enter Source Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Category')}}</label>
                                    
                                    <select name="category" id="category" class="form-control">
                                        <option value="" style="display:none" selected>Select Category</option>
                                        @foreach ($categories as $cate)
                                           <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{__('Create')}}</button>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @endsection