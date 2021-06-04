<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index(){
        $training_center = TrainingCenter::all();
        return view('pages.admin.training_center.index', compact('training_center'));
    }
}
