<?php

namespace App\Http\Controllers;

use App\Models\Inability;
use Illuminate\Http\Request;
use App\Models\DocumentType;
use App\Models\Gender;

class InabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inability = Inability::when($request->q, function ($q) use ($request) {
            $q->where('names', 'like', '%' . $request->q . '%');
        })->paginate();
        return view('pages.admin.inability.index', compact('inability'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document_types = DocumentType::all();
        $genders = Gender::all();
        return view('pages.admin.inability.create', compact('genders', 'document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $inability = Inability::create($request->all());
        // return redirect()->route('inability.create')
        // ->with('status','Se ha creado correctaente la inability');

        $request['password'] = bcrypt($request->document);
        $inability = Inability::create($request->all());
        return redirect()->route('inability.index')->
        with([
            'status' => 'Se ha Creado la Incapacidad correctamente.',
            'type' => 'warning',
        ]);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inability  $inability
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inability  $inability
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $inability = Inability::find($id);
        // return view('pages.admin.inability.edit', compact('inability'));

        $inability = Inability::find($id);
        $document_types = DocumentType::all();
        $genders = Gender::all();
        return view('pages.admin.inability.edit', compact('inability', 'genders', 'document_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inability  $inability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inability = Inability::find($id)->update($request->all());
        return back()->with([
            'status'=>'Se ha editado la incapacidad correctamente',
            'type'=>'warning',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inability  $inability
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inability = Inability::find($id)->delete();
        return back()->with([
            'status'=>'Se ha eliminado la inpacacidad correctamente',
            'type'=>'danger',
            ]);
    }
}
