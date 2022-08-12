<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_element',
        'semantic_name',
        'register_id'
    ];
}
