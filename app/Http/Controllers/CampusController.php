<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function index()
    {
        $campus = Campus::all();
        return view('pages.admin.campus.index', compact('campus'));
    }

    public function create()
    {
        $training_centers = TrainingCenter::all();
        return view('pages.admin.campus.create', compact('training_centers'));
    }

    public function store(Request $request)
    {
        $campus = Campus::create($request->all());
        return redirect()->Route('campus.index')
            ->with('status', 'Se ha creado la Instalación correctamente.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $campus = Campus::find($id);
        return view('pages.admin.campus.edit', compact('campus'));
    }

    public function update(Request $request, $id)
    {
        $campus = Campus::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado la Instalación correctamente.',
            'type' => 'warning',
        ]);
    }

    public function destroy($id)
    {
        $campus = Campus::find($id)->delete();
        return back()->with([
            'status' => 'Se ha eliminado la Instalación correctamente.',
            'type' => 'danger',
            ]);
    }
}
