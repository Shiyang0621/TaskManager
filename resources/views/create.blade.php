@extends('layouts.app')

@section('title', 'Task List')
@section('content')
    <div class="container">
        <form action="{{ route('addTask')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name='title' id="title" class="form-control" require>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" require></textarea>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" id="due_date" class="form-control" require>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </div>
</form>
@endsection