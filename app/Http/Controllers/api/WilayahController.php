<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Kab;
use App\Models\Kec;
use App\Models\Desa;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getKab(Request $request)
    {

        $idProvinsi = $request->input('id');
        $kabupaten = Kab::where('id_propinsi', $idProvinsi)->get();

        return response()->json($kabupaten);
    }

    public function getKec(Request $request)

    {
        $idKabupaten = $request->input('id');
        $kecamatan = Kec::where('id_kabupaten', $idKabupaten)->get();
        return response()->json($kecamatan);
    }

    public function getDesa(Request $request)
    {
        $idKec = $request->input('id');
        $desa = Desa::where('id_kecamatan', $idKec)->get();
        return response()->json($desa);
    }
}
