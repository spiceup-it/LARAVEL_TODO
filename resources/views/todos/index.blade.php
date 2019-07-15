@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Todos</div>

            <div class="card-body">
               <ul class="list-group">
                   @foreach($todos as $todo)
                     <li class="list-group-item">
                        {{ $todo->name }}
                        <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                        @if($todo->completed)
                            <a href="/todos/{{$todo->id}}/not_complete" class="btn btn-danger btn-sm float-right">Done</a>
                        @else
                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-danger btn-sm float-right">Complete</a>
                        @endif
                     </li>
                   @endforeach
               </ul>
            </div>
        </div>
@endsection