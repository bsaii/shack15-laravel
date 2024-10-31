<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index(): JsonResponse
    {
        $activities = DB::table('activities')->get();

        return response()->json($activities);
    }
}
