@extends('layouts.master')

@section('title', 'Page Title')



@section('content')

    {!! Form::model($post, ['method' => 'PATCH','route' => ['posts.update', $post->id]  ]) !!}




    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('text', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}



    {!! Form::close() !!}


@endsection





