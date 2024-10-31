<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EngagementController extends Controller
{
    public function index(): JsonResponse
    {
        $engagements = DB::table('engagements')->get();

        return response()->json($engagements);
    }
}
