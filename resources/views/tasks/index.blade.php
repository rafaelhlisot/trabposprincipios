@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <h1 class="mb-4">Todo List</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-4">Create Task</a>
        <div class="list-group">
            @foreach ($tasks as $task)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1">{{ $task->title }}</h5>
                        <small>{{ $task->created_at->format('d/m/Y') }}</small>
                    </div>
                    <div>
                        <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="completed" value="{{ $task->completed ? 0 : 1 }}">
                            <input type="checkbox" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        </form>
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
