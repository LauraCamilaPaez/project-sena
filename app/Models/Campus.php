<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = 'campus';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'training_center_id',
    ];

    public function trainingCenter(){
        return $this->belongsTo('App\Models\TrainingCenter', 'training_center_id');
    }
}
