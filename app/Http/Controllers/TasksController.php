<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function list()
    {
        return view('tasks.list');
    }
}
