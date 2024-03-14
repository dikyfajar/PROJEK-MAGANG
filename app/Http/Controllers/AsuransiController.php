<?php

namespace App\Http\Controllers;

// get model MAsuransi
use App\Models\MAsuransi;
// return type view
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AsuransiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // get table
        $master = MAsuransi::all();

        // return
        return view('asuransi.master.main', compact('master'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // return
        return view('asuransi.master.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): redirectResponse
    {
        // validate
        $this->validate($request, [
            'id_asu'    => 'required|max:3',
            'nama_asu'  => 'required'
        ]);

        // model create
        MAsuransi::create([
            'id'    => $request->id_asu,
            'nama_asuransi'  => $request->nama_asu
        ]);

        // return redirect
        return redirect()->route('asuransi.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
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
    public function edit(string $id): View
    {
        // var_dump('ok');
        // $id = "00" . $id;
        // if (strlen($id) == 1) {
        //     $id = "00" . $id;
        // }
        // if (strlen($id) == 2) {
        //     $id = "0" . $id;
        // }

        // get data by ID
        $master = MAsuransi::find($id);
        // return view
        return view('asuransi.master.edit', compact('master'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // validate
        $this->validate($request, [
            'id_asu'    => 'required|max:3',
            'nama_asu'  => 'required'
        ]);

        // get data by ID
        $master = MAsuransi::findOrFail($id);

        // model update
        $master->update([
            'id'    => $request->id_asu,
            'nama_asuransi'  => $request->nama_asu
        ]);

        // return
        return redirect()->route('asuransi.index')->with(['success' => 'Data Berhasil di Update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        // get data by ID
        $master = MAsuransi::findOrFail($id);

        // delete
        $master->delete();

        // return
        return redirect()->route('asuransi.index')->with(['success' => 'Data Berhasil di Hapus']);
    }
}
