@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <h1>Create Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" name="completed" id="completed" class="form-check-input">
                <label for="completed" class="form-check-label">Completed</label>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
@endsection
