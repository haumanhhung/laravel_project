@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{__('ListPost')}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/ad')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active">{{__('Post')}}</li>
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
                      <h3 class="card-title">{{__('ListPost')}}</h3>
                      <a href="{{route('post.create')}}" class="btn btn-primary">{{__('CreatePost')}}</a>
                      
                   </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>{{__('Title')}}</th>
                      <th>{{__('Category')}}</th>
                      <th>{{__('Hot')}}</th>
                      <th>{{__('Action')}}</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->category->name}}</td>
                      <td>{{$post->hot}}</td>
                      <td class="d-flex">
                          <a href="{{route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                          <form action="{{route('post.destroy', [$post->id]) }}" class="mr-1" method="POST">
                              @method('DELETE')
                              @csrf
                             <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                          </form>
                          
                      </td>
                    </tr>
                  @endforeach
                    
                    
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            {{$posts->links()}}
          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @endsection