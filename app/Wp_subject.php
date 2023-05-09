<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wp_subject extends Model
{
    protected $fillable = [
        'program_id', 'name', 'code', 'description', 'schedule', 'venue', 'created_by'
    ];
}
