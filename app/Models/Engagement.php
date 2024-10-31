<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    /** @use HasFactory<\Database\Factories\EngagementFactory> */
    use HasUuids, HasFactory;

    protected $fillable = [
        'member_id',
        'messages_sent',
        'messages_received',
        'response_rate',
        'last_interaction'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
