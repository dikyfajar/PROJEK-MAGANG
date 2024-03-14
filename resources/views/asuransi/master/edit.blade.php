@extends('layouts.app')

@section('content')
<div class="container"><br \>
    <h3>EDIT DATA</h3>
    <div class="card">
        <div class="card-header">
            <h5>DATA ASURANSI</h5>
        </div>
        <div class="card-body">
        <form action="{{ route('asuransi.update', $master->id) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
                <div class="col-md-6">
                    <label for="id_asu" class="form-label">ID Asuransi</label>
                    <input type="text" class="form-control @error('id_asu') is-invalid @enderror" value="{{ old('id_asu', $master->id) }}" placeholder="Masukkan ID" name="id_asu" >

                    <!-- error message untuk id -->
                    @error('id_asu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nama_asu" class="form-label">Nama Asuransi</label>
                    <input type="text" class="form-control @error('nama_asu') is-invalid @enderror" value="{{ old('nama_asu', $master->nama_asuransi) }}" placeholder="Masukkan Nama" name="nama_asu">
                    <!-- error message untuk nama -->
                    @error('nama_asu')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-warning">UPDATE</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection