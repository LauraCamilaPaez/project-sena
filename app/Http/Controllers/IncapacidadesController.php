<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\IncapacidadesMailable; 



class IncapacidadesController extends Controller
{
    public function index(){
        return view('incapacidades.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);
        
        $incapacicades = new IncapacidadesMailable($request->all());
    
        Mail::to('jcadenaquintero@gmail.com')->send($incapacicades);

        return redirect()->route('incapacidades.index')->with('info', 'Mensaje enviado');

    }
}
