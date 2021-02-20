<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Goal;
use App\Reason;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::all();
        $reasons = Reason::all();
        $goals = Goal::all();
        return view('dashboard.index', compact('tasks', 'reasons', 'goals'));
    }
}
