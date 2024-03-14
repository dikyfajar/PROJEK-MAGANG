@extends('layouts.app')

@section('content')
<div class="container"><br \>
    <h3>TAMBAH DATA</h3>
    <div class="card">
        <div class="card-header">
            <h5>DATA ASURANSI</h5>
        </div>
        <div class="card-body">
        <form action="{{ route('asuransi.store') }}" method="POST" class="row g-3">
            @csrf
                <div class="col-md-6">
                    <label for="id_asu" class="form-label">ID Asuransi</label>
                    <input type="text" class="form-control @error('id_asu') is-invalid @enderror" placeholder="Masukkan ID" name="id_asu">

                    <!-- error message untuk id -->
                    @error('id_asu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nama_asu" class="form-label">Nama Asuransi</label>
                    <input type="text" class="form-control @error('nama_asu') is-invalid @enderror" placeholder="Masukkan Nama" name="nama_asu">
                    <!-- error message untuk nama -->
                    @error('nama_asu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
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