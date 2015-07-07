@extends('layouts.master')

@section('title', 'All Tasks')

@section('sidebar')
  @parent

  <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="tasks">
    @foreach ($tasks as $task)
      @include('todo.task', [
        'task' => $task,
      ])
    @endforeach
  </div>
@endsection
