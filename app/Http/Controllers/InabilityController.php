<?php

namespace App\Http\Controllers;

use App\Models\Inability;
use Illuminate\Http\Request;

class InabilitytController extends Controller
{
    function guardar(Request $request){

        $inability = new Inability;
        $inability->names = $request->input("names");
        $inability->lastnames = $request->input("lastnames");
        $inability->email = $request->input("email");
        $inability->document_type = $request->input("document_type");
        $inability->document = $request->has("document");
        $inability->phone = $request->has("phone");
        $inability->mobile = $request->has("mobile");
        $inability->messages = $request->has("messages");
        $inability->pdf = $request->has("pdf");
        $inability->save();
        $inability = Inability::all();
        return view("formulario");

     
    }
}
