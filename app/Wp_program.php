<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wp_program extends Model
{
    protected $fillable = [
        'name', 'duration', 'created_by'
    ];
}
