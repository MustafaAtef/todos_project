@extends('layouts.app')

@section('title', 'Todo - Show')
    
@section('content')
    <div class="container">
        <div class="panel panel-info" style="width: 50%; margin: 50px auto">
            <div class="panel-heading">
            <h3 class="panel-title">
                {{$todo->title}}
                <span class="badge">
                    @if ($todo->completed)
                        Completed
                    @else
                        Non Completed
                    @endif
                </span>
            </h3>
            </div>
            <div class="panel-body">
                {{$todo->desc}}
            </div>
        </div>
    </div>
@endsection