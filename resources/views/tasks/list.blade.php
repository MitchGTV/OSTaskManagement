@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-auto">
            <h1>Viewing all Tasks</h1>
        </div>
    </div>
    <hr>
    <button class="mt-2 btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#newTaskModal">New Task</button>
    @if(session('success'))
        <div class="alert alert-soft-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Controls</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tasks as $task)
                            <tr>
                                <th scope="row">{{ $task->id }}</th>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if($task->priority === 'HIGH')
                                        <span class="badge badge-phoenix badge-phoenix-danger">HIGH</span>
                                    @elseif($task->priority === 'MEDIUM')
                                        <span class="badge badge-phoenix badge-phoenix-warning">MEDIUM</span>
                                    @else
                                        <span class="badge badge-phoenix badge-phoenix-success">LOW</span>
                                    @endif
                                </td>
                                <td>{{ $task->created_at->format('d-M-Y h:ia') }}</td>
                                <!-- Edit & Delete Controls -->
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No tasks found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="newTaskModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newTaskModalLabel">New Task</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                </div>
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="taskDescription">Task Description</label>
                            <input class="form-control" type="text" name="description"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="taskPriority">Task Priority</label>
                            <select class="form-select" aria-label="Select A Priority..." name="priority">
                                <option selected="">Select A Priority...</option>
                                <option value="HIGH">High</option>
                                <option value="MEDIUM">Medium</option>
                                <option value="LOW">Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
