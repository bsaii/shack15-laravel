<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EngagementController;
use App\Http\Controllers\EventAttendanceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/members', [MemberController::class, 'index']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/attendances', [EventAttendanceController::class, 'index']);
Route::get('/engagements', [EngagementController::class, 'index']);
Route::get('/activities', [ActivityController::class, 'index']);

require __DIR__ . '/auth.php';
