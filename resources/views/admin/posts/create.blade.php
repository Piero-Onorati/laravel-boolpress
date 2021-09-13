@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="post_title" class="form-label"> Post Title</label>
                <input type="text" name="title" class="form-control" id="post_title" placeholder="Write the title...">
            </div>
            <div class="mb-3">
                <label for="post_desc" class="form-label">Post Content</label>
                <textarea name="content" class="form-control" id="post_desc" rows="3" placeholder="Write the content..."></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>
        </form>
    </div>
    
@endsection