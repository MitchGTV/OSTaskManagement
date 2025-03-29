@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-auto">
            <h1>Viewing all Tasks</h1>
        </div>
    </div>
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
                            <th scope="col">Controls</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Update facebook profile</td>
                            <td><span class="badge badge-phoenix badge-phoenix-danger">HIGH</span></td>
                            <td><a class="" type="button">Edit</a> / <a class="" type="button">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
