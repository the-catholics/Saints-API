<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action_id',
        'api_element_id'
    ];
}
