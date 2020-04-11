@extends('layouts.app')

@section('title', 'Todos')

@section('content')
    <div class="container">
        <h1 class="text-center">Todos List 
            <button class="btn btn-success">
                <a style="text-decoration: none; color: #fff;" href="todos/create">ADD Todo</a>
            </button>
        </h1>
        <table class="table table-border table-hover">
            <thead>
                <tr>
                    <th style='width: 30%'>Title</th>
                    <th style='width: 40%'>Description</th>
                    <th style="width: 30%">Controls</th> 
                </tr>
            </thead>
            <tbody>
                @forelse ($todos as $todo)
                    <tr>
                        <td style='width: 30%'>{{$todo->title}}</td>
                        <td style='width: 40%'>{{$todo->desc}}</td>
                        <td style="width: 30%">
                            @if (!$todo->completed)
                                <button class='btn btn-success'><a style="text-decoration: none; color: #fff;" href="todo/complete/{{$todo->id}}">Complete It!</a></button>
                            @endif
                        <button class='btn btn-warning' ><a style="text-decoration: none; color: #fff;" href="todos/edit/{{$todo->id}}">Edit</a></button>
                            <button class='btn btn-danger'><a style="text-decoration: none; color: #fff;" href="todo/delete/{{$todo->id}}">Delete</a></button>
                            <button class='btn btn-info'><a style="text-decoration: none; color: #fff;" href="todo/{{$todo->id}}">Show</a></button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">there are no TODOS!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection