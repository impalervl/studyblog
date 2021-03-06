@extends('layouts.admin')

@section('content')
    <h1>Admin Posts</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height ="100" src="{{$post->photo_id ? $post->photo->path : 'no photo'}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id ? $post->category->name:'Categoraized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>
@endsection