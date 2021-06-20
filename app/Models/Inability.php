<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inability extends Model
{
    use HasFactory;

    protected $fillable = [
        'names',
        'lastnames',
        'email',
        'gender',
        'document',
        'document_type',
        'phone',
        'mobile',
    ];
}
