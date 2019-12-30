@extends('layouts.blog-home')

@section('content')

<div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8">

   @if($posts)

     @foreach($posts as $post)

    <!-- First Blog Post -->
    <h2>
        <a href="#">{{$post->title}}</a>
    </h2>
    <p class="lead">
        by <a href="index.php">{{$post->user->name}}</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>{{str_limit($post->body, 100)}}</p>
    <a class="btn btn-primary" href="/post/{{$post->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
     @endforeach
  @endif

   
    <!-- Pager -->
    

</div>
@endsection
