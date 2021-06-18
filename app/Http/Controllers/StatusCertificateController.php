<?php

namespace App\Http\Controllers;

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
}
