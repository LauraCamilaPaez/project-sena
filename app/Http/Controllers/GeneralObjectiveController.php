<?php

namespace App\Http\Controllers;

use App\Models\GeneralObjective;
use Illuminate\Http\Request;

class GeneralObjectiveController extends Controller
{
    public function index()
    {
        $general_objectives = GeneralObjective::all();
        return view('pages.admin.general_objective.index', compact('general_objectives'));
    }

    public function create()
    {
        return view('pages.admin.general_objective.create');
    }

    public function store(Request $request)
    {
        $general_objectives = GeneralObjective::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $general_objectives = GeneralObjective::find($id);
        return view('pages.admin.general_objective.edit', compact('general_objectives'));
    }

    public function update(Request $request, $id)
    {
        $general_objectives = GeneralObjective::find($id)->update($request->all());
        return back();
    }
}
