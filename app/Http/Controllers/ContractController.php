<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('pages.admin.contract.index', compact('contracts'));
    }

    public function create()
    {
        return view('pages.admin.contract.create');
    }

    public function store(Request $request)
    {
        $contracts = Contract::create($request->all());
        return back();
    }

    public function edit($id)
    {
        $contracts = Contract::find($id);
        return view('pages.admin.contract.edit', compact('contracts'));
    }

    public function update(Request $request, $id)
    {
        $contracts = Contract::find($id)->update($request->all());
        return back();
    }
}
