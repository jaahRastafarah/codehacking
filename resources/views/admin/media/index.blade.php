@extends('layouts.admin')


@section('content')
    <h1>Media</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($photos)
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img  height="50" src="{{$photo->file ? $photo->file : 'no file'}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
                    <td>{{$photo->updated_at ? $photo->updated_at : 'no date'}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}

                            <div class="form-group">
                              {!! Form::submit('Delete', ['class'=>'btn btn-primary']) !!}
                          </div>
                          {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


@stop