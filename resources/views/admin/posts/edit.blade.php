@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit post n. {{$post->id}}</h2>

        <form action="{{route('admin.posts.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="post_title" class="form-label"> Post Title</label>
                <input type="text" name="title" class="form-control" id="post_title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="post_desc" class="form-label">Post Content</label>
                <textarea name="content" class="form-control" id="post_desc" rows="3">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Edit Post</button>
            </div>
        </form>
    </div>
    
@endsection