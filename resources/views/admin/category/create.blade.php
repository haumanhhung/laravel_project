@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('CreateCategory')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('website')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('category.index')}}">{{__('ListCategory')}}</a></li>
              <li class="breadcrumb-item active">{{__('CreateCategory')}}</li>
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
                      <h3 class="card-title">{{__('CreateCategory')}}</h3>
                      <a href="{{route('category.index')}}" class="btn btn-primary">{{__('ListCategory')}}</a>
                      
                   </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
                        <form action="{{ route('category.store')}}" method="post">
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
                                    <label for="name">{{__('Name')}}</label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Enter Category">
                                    if ($errors->has('name')) {
    <h2>Name error</h2>
}
                                    

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