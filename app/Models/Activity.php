<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /** @use HasFactory<\Database\Factories\ActivityFactory> */
    use HasUuids, HasFactory;

    protected $fillable = [
        'member_id',
        'year',
        'active_days',
        'messages_sent',
        'events_attended'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
