<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CertificateVariablesConfig;
use App\Http\Requests\StoreCertificateVariablesConfigRequest;
class CertificateVariablesConfigController extends Controller
{
    public function index()
    {
        return CertificateVariablesConfig::all();
    }

    public function find($id){
        return CertificateVariablesConfig::find($id);
    }

    public function store(StoreCertificateVariablesConfigRequest $request)
    {
        return CertificateVariablesConfig::create($request->all());
    }

    public function update(Request $request, $id){
        $updateVariable = CertificateVariablesConfig::find($id)->update($request->all());
        return response()->json($updateVariable, 202);
    }

    public function delete($id){
        $deleteVariable = CertificateVariablesConfig::find($id)->delete();
        return response()->json($deleteVariable, 202);

    }
}
