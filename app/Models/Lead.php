<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'source',
        'source_url',
        'status',
        'notes',
    ];
}
