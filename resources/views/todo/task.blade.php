@extends('layouts.master')

@section('title', !is_null($task) ? 'Task: ' . $task->getName() : 'Task not found')

@section('content')
  @include('partials.task')
@endsection
