<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $table = 'leagues';

    protected $fillable = ['response'];

    protected $casts = [
        'response' => 'array',
    ];
}
