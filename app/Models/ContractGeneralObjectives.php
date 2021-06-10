<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractGeneralObjectives extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'contract_users_id',
        'general_objectives_id'
    ];
}
