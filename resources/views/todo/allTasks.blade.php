@extends('layouts.master')

@section('title', 'All Tasks')

@section('content')
  <div class="tasks">
    @foreach ($tasks as $task)
      @include('partials.task', [
        'task' => $task,
      ])
    @endforeach
  </div>
@endsection
