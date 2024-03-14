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
        //
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
