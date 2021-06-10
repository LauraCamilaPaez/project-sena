<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractSpecificObjectives extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'contract_users_id',
        'specific_objectives_id'
    ];
}
