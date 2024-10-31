<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasUuids, HasFactory;

    protected $fillable = [
        'name',
        'event_date',
        'attendance_count',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
