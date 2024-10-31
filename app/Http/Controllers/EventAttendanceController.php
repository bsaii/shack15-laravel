<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventAttendanceController extends Controller
{
    public function index(): JsonResponse
    {
        $attendances = DB::table('event_attendances')->get();

        return response()->json($attendances);
    }
}
