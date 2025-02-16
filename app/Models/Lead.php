<?php

namespace App\Models;

use Illuminate\Support\Str;
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

    public function getSourceUrlAttribute($value): string
    {
        return Str::startsWith($value, ['http://', 'https://']) ? $value : 'https://' . $value;
    }
}
