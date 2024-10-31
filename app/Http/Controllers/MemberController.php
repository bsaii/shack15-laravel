<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(): JsonResponse
    {
        $members = DB::table('members')->orderBy('created_at', 'desc')->limit(10)->get();
        return response()->json($members);
    }
}
