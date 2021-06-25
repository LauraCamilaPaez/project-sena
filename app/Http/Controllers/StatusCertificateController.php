<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\StatusCertificate;
use Illuminate\Http\Request;

class StatusCertificateController extends Controller
{
    public function store(Request $request)
    {
        $request['status'] = 'Solicitado';
        $status_certificate = StatusCertificate::create($request->all());
        return back();
    }

    public function index()
    {
        $status_certificates = StatusCertificate::all();
        return view('pages.users.contract.index', compact('status_certificates'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $pdf = $request->file('pdf');
        $url = $pdf->store('public/pdf');
        $data['certificate'] = $url;
        $data['status'] = 'Entregado';
        $status_certificate = StatusCertificate::find($id)->update($data);
        return back();
    }
}
