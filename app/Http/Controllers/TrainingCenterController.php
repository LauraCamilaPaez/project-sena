<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $training_center = TrainingCenter::all();
        return view('pages.admin.training_center.index', compact('training_center'));
    }

    public function create()
    {
        return view('pages.admin.training_center.create');
    }

    public function store(Request $request)
    {
        $training_center = TrainingCenter::create($request->all());
        return redirect()->route('training_center.index')
            ->with('status', 'Se ha creado el Centro de Formación correctamente');
    }

    public function edit($id)
    {
        $training_center = TrainingCenter::find($id);
        return view('pages.admin.training_center.edit', compact('training_center'));
    }

    public function update(Request $request, $id)
    {
        $training_center = TrainingCenter::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado el Centro de Formación correctamente.',
            'type' => 'danger',
        ]);
    }

    public function destroy($id)
    {
        $training_center = TrainingCenter::find($id)->delete();
        return back()->with([
            'status' => 'Se ha eliminado el Centro de Formación correctamente.',
            'type' => 'danger',
        ]);
    }
}
