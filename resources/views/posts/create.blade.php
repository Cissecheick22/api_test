@extends('layouts.master')

@section('title', 'Page Title')



@section('content')

    {!! Form::open(['route' => 'posts.store','method' => 'post'] ) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('text', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

        {!!  Form::label('category','category' , ['class'=>'control-label'])  !!}

        <select class="form-control" name="category">
            @foreach($categories as $category)

            <option value='{{$category->id}}'>  {{$category->name}} </option>

            @endforeach
        </select>

    </div>


    {!! Form::submit('Create New Post', ['class' => 'btn btn-primary']) !!}



       {!! Form::close() !!}


@endsection





