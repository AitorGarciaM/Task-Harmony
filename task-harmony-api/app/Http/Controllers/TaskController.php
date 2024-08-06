<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //

    public function index() {
        $tasks = DB::table('task')->select()->get();

        return response()->json([
            "task" => $tasks,
        ]);
    }
}
