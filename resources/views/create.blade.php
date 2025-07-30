@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<div class="card">
  <div class="card-header">New Task</div>
  <div class="card-body">
    <form action="{{ route('tasks.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" id="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-select">
          <option value="pending">Pending</option>
          <option value="in_progress">In Progress</option>
          <option value="done">Done</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="due_date" class="form-label">Due Date</label>
        <input type="date" name="due_date" id="due_date" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Save</button>
      <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</div>
@endsection