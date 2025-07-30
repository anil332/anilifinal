@foreach($tasks as $task)
    <div>
        <h3>{{ $task->title }}</h3>
        <p>Status: {{ $task->status }}</p>
        <p>Due: {{ $task->due_date }}</p>
    </div>
@endforeach

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">Tasks</div>
    <div class="card-body">
      <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">New Task</a>
      <table class="table">
        <thead>
          <tr>
            <th>Title</th><th>Status</th><th>Due Date</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
          <tr>
            <td>{{ $task->title }}</td>
            <td>{{ ucfirst($task->status) }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
              <a href="{{ route('tasks.show', $task) }}">View</a> |
              <a href="{{ route('tasks.edit', $task) }}">Edit</a> |
              <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Delete?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $tasks->links() }}
    </div>
  </div>
</div>
@endsection