<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function index(){
        $document_types = DocumentType::all();
        return view('pages.admin.document_type.index', compact('document_types'));
    }

    public function create()
    {
        return view('pages.admin.document_type.create');
    }

    public function store(Request $request)
    {
        $document_type = DocumentType::create($request->all());
        return redirect()->route('document_types.index')
            ->with('status','Se ha creado el Tipo de Documento correctamente.');
    }

    public function edit($id)
    {
        $document_type = DocumentType::find($id);
        return view('pages.admin.document_type.edit', compact('document_type'));
    }

    public function update(Request $request, $id)
    {
        $document_type = DocumentType::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado el Tipo de Documento correctamente.',
            'type' => 'warning',
        ]);
    }

    public function destroy($id){
        $document_type = DocumentType::find($id)->delete();
        return back()->with([
            'status' => 'Se ha eliminado el Tipo de Documento correctamente.',
            'type' => 'danger',
        ]);
    }
}
