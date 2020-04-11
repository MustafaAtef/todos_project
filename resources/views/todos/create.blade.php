@extends('layouts.app')

@section('title', 'Todos - Create')

@section('body_style', 'background-color: #f1f1f1')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form 
            action="/todos/create" 
            method="POST" 
            style="
                width: 60%;
                margin: 50px auto;
                border: 1px solid #ccc;
                background: #fff;
                box-shadow: 0 0 10px #e8e8e8;
                border-radius: 5px;
                padding: 0 20px 20px;"
            >
            <h1 class="text-center">Create Todo</h1>
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Todo Title">
            </div>
    
            <div class="form-group">
                <textarea class="form-control" name="desc" cols="30" rows="10" placeholder="Todo Description"></textarea>
            </div>
    
            <input type="submit" class="btn btn-primary" style="position: relative;
            left: 46%;" value="Create">
        </form>
    </div>
@endsection