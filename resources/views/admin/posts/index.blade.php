@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
      <table class="table">
          <thead>
            <tr>
               <th>id</th>
               <th>User id</th>
               <th>Photo id</th>
                <th>Category id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Post</th>
                <th>Comment</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
          </thead>
          <tbody>

                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                        <td>{{$post->id}}</td>
                        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                        <td><img height="100" src="{{$post->photo ? $post->photo->file : 'Nothing found'}}" alt=""></td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body, 30)}}</td>
                            <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                            <td><a href="{{route('admin.comments.show', $post->id)}}">View Comment</a></td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach

                    @endif



          </tbody>
        </table>


    @stop