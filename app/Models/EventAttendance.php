<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttendance extends Model
{
    /** @use HasFactory<\Database\Factories\EventAttendanceFactory> */
    use HasUuids, HasFactory;

    protected $fillable = [
        'member_id',
        'attended_date'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
