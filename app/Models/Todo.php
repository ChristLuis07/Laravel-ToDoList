<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "todo";
    protected $fillable = ['task', 'is_done'];
}
