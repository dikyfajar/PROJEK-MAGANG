<?php

namespace App\Http\Controllers;

// get model Pasien
use App\Models\Pasien;
use App\Models\Desa;
use App\Models\Kec;
use App\Models\Kab;
use App\Models\Prov;

// return type
use Illuminate\View\View;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // get pasien
        $pasien = Pasien::all();

        // return view
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // get model (table db)
        $provinsi = Prov::all();
        // $kabupaten = Kab::all();
        // $kecamatan = Kec::all();
        // $desa = Desa::all();

        //return view
        return view('pasien.create', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'nama_pasien'   =>  'required|max:100',
            'nik'           =>  'required',
            'kk'            =>  'required',
            'jkelamin'      =>  'required',
            'tgl_lahir'     =>  'required',
            'telp_pasien'   =>  'required',
            'email'         =>  'nullable|varchar|max:100',
            'prov_pas'   =>  'required',
            'kab_pas'    =>  'required',
            'kec_pas'    =>  'required',
            'desa_pas'   =>  'required',
            'alamat_pas'    =>  'required',
            'id_desa_pas'   =>  'required',
            'status_pasien' =>  'required',
            'nama_pj'       =>  'required|max:100',
            'status_pj'     =>  'required',
            'telp_pj'       =>  'required',
            'prov_pj'   =>  'required',
            'kab_pj'    =>  'required',
            'kec_pj'    =>  'required',
            'desa_pj'   =>  'required',
            'alamat_pj'    =>  'required',
            'id_desa_pj'   =>  'required',
        ]);

        // model::create
        Pasien::create([
            'nama_pasien'   =>  $request->nama_pasien,
            'nik'           =>  $request->nik,
            'kk'            =>  $request->kk,
            'jenis_kelamin' =>  $request->jkelamin,
            'tgl_lahir'     =>  $request->tgl_lahir,
            'telp_pasien'   =>  $request->telp_pasien,
            'email'         =>  $request->email,
            'alamat_pasien' =>  $request->alamat_pas . ", " . $request->desa_pas . ", " . $request->kec_pas . ", " . $request->kab_pas . ", " . $request->prov_pas,
            'id_desa_pasien' =>  $request->id_desa_pas,
            'nama_pj'       =>  $request->nama_pj,
            'status_pj'     =>  $request->status_pj,
            'telp_pj'       =>  $request->telp_pj,
            'alamat_pj'     =>  $request->alamat_pj . ", " . $request->desa_pj . ", " . $request->kec_pj . ", " . $request->kab_pj . ", " . $request->prov_pj,
            'id_desa_pj'    =>  $request->id_desa_pj,
            'status'        =>  $request->status_pasien
        ]);

        // return redirect
        return redirect()->route('pasien.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
