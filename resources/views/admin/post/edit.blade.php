@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('EditPost')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/ad')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('post.index')}}">{{__('ListPost')}}</a></li>
              <li class="breadcrumb-item active">{{__('EditPost')}}</li>
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
                        <form action="{{ route('post.update', [$post->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                    <input type="name" name="title" class="form-control" id="title" value="{{$post->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Content')}}</label>
                                    
                                    <textarea  name="content" class="form-control" id="content">{{$post->content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Image')}}</label>
                                    <input type="name" name="image1" class="form-control" id="image1" value="{{$post->image1}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Image')}}</label>
                                    <input type="name" name="image2" class="form-control" id="image2" value="{{$post->image2}}">
                                </div>
                                <div class="form-group">
        
                                    <label for="name">{{__('Hot')}}</label>
                                    <select name="hot" id="hot" class="form-control">
                                        
                                        
                                    
                                      @if($post->hot==1)
                                          <option selected value="1">Hot</option>
                                          <option value="0">No Hot</option>
                                      @else
                                          <option value="1">Hot</option>
                                          <option selected value="0">No Hot</option>
                                      @endif
                                    </select>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">{{__('Source')}}</label>
                                    <input type="name" name="source" class="form-control" id="source" value="{{$post->source}}">
                                </div>
                                <div class="form-group">
        
                                    <label for="name">{{__('Category')}}</label>
                                    <select name="category" id="category" class="form-control">
                                        
                                        @foreach ($categories as $cate)
                                           <option value="{{$cate->id}}" @if($post->category_id == $cate->id) selected @endif>{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
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