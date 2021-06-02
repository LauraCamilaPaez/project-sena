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

    //Crear Género
    public function create()
    {
        return view('pages.admin.gender.create');
    }

    //
    public function store(Request $request)
    {
        $gender = Gender::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $gender = Gender::find($id);
        return view('pages.admin.gender.edit', compact('gender'));
    }

    public function update(Request $request, $id)
    {
        $gender = Gender::find($id)->update($request->all());
        return back();
    }

    //Destroy a register in the DB for $id
    public function destroy($id)
    {
        $gender = Gender::find($id)->delete();
        return back();
    }
}
