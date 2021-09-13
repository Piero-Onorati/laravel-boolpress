@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">Show</a>
                            <a class="btn btn-secondary" href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                            <form action="{{route('admin.posts.destroy', $post->id)}}" method="post" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection