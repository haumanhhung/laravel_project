@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/ad')}}">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
          
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$countcategory}}</h3>

                <p>Category</p>
              </div>
              <div class="icon">
              <i class="fas fa-tags"></i>
              </div>
              <a href="{{url('admin/category')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          

            
          </div>
          <div class="col-lg-6">
          
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$countpost}}</h3>

                <p>Post</p>
              </div>
              <div class="icon">
              <i class="fas fa-book"></i>
              </div>
              <a href="{{url('admin/post')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          

            
          </div>
          <!-- /.col-md-6 -->
         
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection