<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wp_program extends Model
{
    protected $fillable = [
        'program_name', 'from', 'to', 'duration', 'created_by'
    ];
}