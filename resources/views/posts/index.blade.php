@extends('layouts.master')

@section('title', 'Page Title')


@section('content')



    <table class="table table-hover">

        <th> ID</th>
        <th> TEXT</th>
        <th> CONTENT</th>
        <th> STATE</th>
        <th> CATEGORY</th>




        @foreach($posts as $post)
        <tr>

                <td> {{$post->id}} </td>
                <td> {{$post->text}} </td>
                <td> {{$post->content}} </td>
               <td> {{$post->category->name}} </td>
                <td> {{$post->state}} </td>


            <td>{{ link_to_route('posts.show', 'View Post', array($post->id),array('class' => 'btn btn-info')) }}</td>
            <td>{{ link_to_route('posts.edit', 'Edit Post', array($post->id),array('class' => 'btn btn-warning')) }}</td>

            <td>
                {{ Form::open([ 'method'  => 'delete', 'route' => [ 'posts.destroy', $post->id ] ])  }}
                {{ Form::hidden('id', $post->id) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            </td>

        </tr>
        @endforeach







    </table>







@endsection





