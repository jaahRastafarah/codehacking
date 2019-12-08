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
                <th>Created</th>
                <th>Updated</th>
            </tr>
          </thead>
          <tbody>

                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><img height="100" src="{{$post->photo ? $post->photo->file : 'Nothing found'}}" alt=""></td>
                        <td>{{$post->category ? $post->category->id : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->created_at->diffForHumans()}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach

                    @endif



          </tbody>
        </table>


    @stop