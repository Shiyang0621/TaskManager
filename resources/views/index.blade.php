@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<div class="container mt-4">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <h1 class="mb-4">Task List</h1>

    <table class="table table-striped table-bordered shadow-lg">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    @if($task->status == 1)
                    <span class="badge badge-success" style="color: green;">Completed</span>
                    @else
                    <span class="badge badge-warning" style="color: red;">Pending</span>
                    @endif
                </td>
                <td>{{ $task->due_date }}</td>
             
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
