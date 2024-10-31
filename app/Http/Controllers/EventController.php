<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(): JsonResponse
    {
        $events = DB::table('events')->limit(5)->get();

        return response()->json($events);
    }
}
