@extends('layouts.app')

@section('content')
<div class="container"><br \>
    <h3>TAMBAH DATA</h3>
    <div class="card">
        <div class="card-header">
            <h5>DATA ASURANSI PASIEN</h5>
        </div>
        <div class="card-body">
        <form action="{{ route('dtasuransi.store') }}" method="POST" class="row g-3">
            @csrf
                {{-- <div class="col-md-4">
                    <label for="id_dtasr" class="form-label">ID</label>
                    <input type="text" class="form-control" placeholder="Masukkan ID" name="id_dtasr">
                </div> --}}
                <div class="col-md-6">
                    <label for="no_rekam" class="form-label">No. Rekam Medis</label>
                    <select name="no_rekam" id="no_rekam" class="form-select">
                        <option selected>--Jelajahi--</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_asr" class="form-label">ID Asuransi</label>
                    <select name="id_asr" id="id_asr" class="form-select">
                        <option selected>--Pilih Asuransi--</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="ket"></textarea>
                    <label for="floatingTextarea">Ket</label>
                </div>                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection