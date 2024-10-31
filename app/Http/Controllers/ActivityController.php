<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index(): JsonResponse
    {
        $activities = DB::table('activities')->orderBy('created_at', 'desc')->limit(5)->get();

        return response()->json($activities);
    }
}
