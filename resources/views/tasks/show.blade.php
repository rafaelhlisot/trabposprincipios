@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <small>Created at: {{ $task->created_at->format('d/m/Y') }}</small>
        <br>
        <small>Completed: {{ $task->completed ? 'Yes' : 'No' }}</small>
        <div class="mt-4">
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to list</a>
        </div>
    </div>
@endsection
