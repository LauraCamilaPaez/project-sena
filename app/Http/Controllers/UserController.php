<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use App\Models\Gender;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::when($request->q, function ($q) use ($request) {
            $q->where('names', 'like', '%' . $request->q . '%');
        })->paginate();
        return view('pages.admin.user.index', compact('users'));
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
        return view('pages.admin.user.create', compact('genders', 'document_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['password'] = bcrypt($request->document);
        $user = User::create($request->all());
        return redirect()->route('users.index')
            ->with('status', 'Se ha creado el Usuario correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $document_types = DocumentType::all();
        $genders = Gender::all();
        return view('pages.admin.user.edit', compact('user', 'genders', 'document_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado el Usuario correctamente.',
            'type' => 'warning',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return back()->with([
            'status' => 'Se ha eliminado el Usuario correctamente.',
            'type' => 'danger',
        ]);
    }

    public function edit_profile()
    {
        $document_types = DocumentType::all();
        $genders = Gender::all();
        return view('profile', compact( 'genders', 'document_types'));
    }

    public function update_profile(Request $request)
    {
        $update_profile = User::find(auth()->user()->id)->update($request->all());
        return back();
    }
}
