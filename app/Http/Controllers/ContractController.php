<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('pages.admin.contract.index', compact('contracts'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.admin.contract.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $pdf = $request->file('pdf');
        $url = $pdf->store('public/pdf');
        $data['pdf'] = $url;
        $contracts = Contract::create($data);
        return redirect()->route('contracts.index')
            ->with('status', 'Se ha creado el Contrato correctamente.');
    }

    public function edit($id)
    {
        $contracts = Contract::find($id);
        return view('pages.admin.contract.edit', compact('contracts'));
    }

    public function update(Request $request, $id)
    {
        $contracts = Contract::find($id)->update($request->all());
        return back()->with([
            'status' => 'Se ha editado el Contrato correctamente.',
            'type' => 'warning',
        ]);
    }

    //listar contratos asociados a un usuario
    public function listContracts()
    {
        $user = Auth::user();
        $contracts = Contract::where('user_id', $user->id)->get();
        return view('pages.users.contract.list_contract', compact('contracts'));
    }
}
