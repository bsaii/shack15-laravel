<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'joined_date',
        'last_active_date',
        'status',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
