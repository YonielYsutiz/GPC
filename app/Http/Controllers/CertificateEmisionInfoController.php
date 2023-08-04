<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificateEmisionInfo;
use App\Http\Requests\StoreCertificateEmisionInfoRequest;

class CertificateEmisionInfoController extends Controller
{
    public function index()
    {
        return CertificateEmisionInfo::all();
    }   
    
    public function find($id)
    {
        return CertificateEmisionInfo::find($id);
    }

    public function store(StoreCertificateEmisionInfoRequest $request){
        return CertificateEmisionInfo::create($request->all());
    }

    public function update(Request $request, $id){
        $updateEmision = CertificateEmisionInfo::find($id)->update($request->all());
        return response()->json($updateEmision, 202);
    }

    public function delete($id){
        $deleteEmision = CertificateEmisionInfo::find($id)->delete();
        return response()->json($deleteEmision, 202);

    }
}
