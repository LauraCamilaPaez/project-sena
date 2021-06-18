<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\IncapacidadesMailable; 
use App\Mail\MensajeRecibido; 




class IncapacidadesController extends Controller
{
    public function index(){
        return view('incapacidades.index');
    }

    public function store(Request $request){

        // $request->validate([
        //     'name' => 'required',
        //     'correo' => 'required|email',
        //     'mensaje' => 'required',
        //     
        // ]);
        
        // $incapacicades = new IncapacidadesMailable($request->all());
    
        // Mail::to('jcadenaquintero@gmail.com')->send($incapacicades);

        // return redirect()->route('incapacidades.index')->with('info', 'Mensaje enviado');

            $message=[
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'content'=>$request->content,
                'archivo'=>$request->file('archivo')

            ];

            Mail::to($message['email'])->send(new IncapacidadesMailable($message));
            return redirect()->route('incapacidades.index')->with('status','Incapacidad enviada');

    }
}
