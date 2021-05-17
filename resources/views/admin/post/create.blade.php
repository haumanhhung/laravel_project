@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('website')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('post.index')}}">List Post</a></li>
              <li class="breadcrumb-item active">Create Post</li>
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
                      <h3 class="card-title">Create Post</h3>
                      <a href="{{route('post.index')}}" class="btn btn-primary">List Post</a>
                      
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
                                    <label for="name">Title Post</label>
                                    <input type="name" name="title" class="form-control" id="title" placeholder="Enter Title Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">Content Post</label>
                                    <input type="name" name="content" class="form-control" id="content" placeholder="Enter Content Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">Image1 Post</label>
                                    <input type="name" name="image1" class="form-control" id="image1" placeholder="Enter Url image1 Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">Image2 Post</label>
                                    <input type="name" name="image2" class="form-control" id="image2" placeholder="Enter Url image2 Post">
                                </div>
                                <div class="form-group">
                                    <label for="name">Select Category</label>
                                    
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
                            <button type="submit" class="btn btn-primary">Submit</button>
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