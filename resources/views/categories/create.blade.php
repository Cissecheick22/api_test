@extends('layouts.master')

@section('title', 'Page Title')



@section('content')

    {!! Form::open(['route' => 'categories.store']) !!}

    <div class="form-group">
        {!! Form::label('Name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Create Category Post', ['class' => 'btn btn-primary']) !!}



    {!! Form::close() !!}


@endsection





