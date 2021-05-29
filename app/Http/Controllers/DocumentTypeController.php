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

    public function destroy($id){
        $document_type = DocumentType::find($id)->delete();
        return back();
    }
}
