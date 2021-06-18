<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCertificate extends Model
{
    use HasFactory;

    protected $table = 'status_certificate';
    protected $fillable = [
        'certificate',
        'user_id',
        'contract_id',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function contracts()
    {
        return $this->belongsTo('App\Models\Contract','contract_id');
    }
}
