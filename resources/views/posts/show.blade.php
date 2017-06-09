@extends('layouts.master')

@section('title', 'Page Title')


@section('content')

    <p>View post</p>

    <table class="table .table-striped">

        <th> ID</th>
        <th> TEXT</th>
        <th> CONTENT</th>
        <th> CATEGORY</th>
        <th> STATE</th>



        <tr>

            <td> {{$posts->id}} </td>
            <td> {{$posts->text}} </td>
            <td> {{$posts->content}} </td>
            <td> {{$posts->category_id}} </td>
            <td> {{$posts->state}} </td>

            <td>{{ link_to_route('posts.show', 'View Post', array($posts->id),array('class' => 'btn btn-info')) }}</td>
            <td>{{ link_to_route('posts.edit', 'Edit Post', array($posts->id),array('class' => 'btn btn-warning')) }}</td>


            <td>
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'posts.destroy', $posts->id ] ])  }}
                {{ Form::hidden('id', $posts->id) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            </td>




        </tr>



    </table>



@endsection





