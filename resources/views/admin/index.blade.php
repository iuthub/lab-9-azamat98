@extends('layouts.admin')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    @foreach($posts as $post)
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->content}}</p>
        <a href="{{ route('admin.edit',['id'=>$post->id]) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.delete',['id'=>$post->id]) }}" class="btn btn-danger">Delete</a>
    </div>
      </div>
    @endforeach
@endsection