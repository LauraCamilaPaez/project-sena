<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralObjective extends Model
{
    use HasFactory;

    protected $table = 'general_objective';
    protected $fillable = [
        'description',
    ];
}
