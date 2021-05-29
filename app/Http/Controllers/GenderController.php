<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    //Read the registers in the DB
    public function index()
    {
        $genders = Gender::all();
        return view('pages.admin.gender.index', compact('genders'));
    }

    //Destroy a register in the DB for $id
    public function destroy($id)
    {
        $gender = Gender::find($id)->delete();
        return back();
    }
}
