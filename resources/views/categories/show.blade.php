@extends('layouts.master')

@section('title', 'Page Title')


@section('content')

    <p>View post</p>

    <table class="table .table-striped">

        <th> ID</th>
        <th> NAME</th>
        <th> STATUS</th>




        <tr>

            <td> {{$category->id}} </td>
            <td> {{$category->name}} </td>
            <td> {{$category->status}} </td>



            <td>{{ link_to_route('categories.show', 'View Post', array($category->id),array('class' => 'btn btn-info')) }}</td>
            <td>{{ link_to_route('categories.edit', 'Edit Post', array($category->id),array('class' => 'btn btn-warning')) }}</td>

            <td>
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'categories.destroy', $category->id ] ])  }}
                {{ Form::hidden('id', $category->id) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            </td>

        </tr>



    </table>



@endsection





