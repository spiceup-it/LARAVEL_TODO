@extends('layouts.app')

@section('content')

<h1 class="text-center">Single Todo Details</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ $todo->name }}</div>

            <div class="card-body">
               <div>{{$todo->description}}</div>
            </div>
            <a href="{{route('todos.edit', ['id'=> $todo->id])}}" class="btn btn-primary btn-sm">Edit</a>
            <a href="{{route('todos.delete', ['id'=> $todo->id])}}" class="btn btn-danger btn-sm">Delete</a>
        </div>
    </div>
</div>

@endsection