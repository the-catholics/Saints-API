<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merit extends Model
{
    use HasFactory;

    protected $fillable = [
        'constant_number',
        'constant_name'
    ];
}
