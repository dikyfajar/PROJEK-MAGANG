@extends('layouts.app')

@section('content')
<div class="container">
    <hr \>
    <h4>DATA ASURANSI PASIEN</h4>
    <div class="card border-0 shadow-sm rounded">
        <div class="card-header">
            <a href="{{ route('dtasuransi.create') }}"  class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No. Rekam Medis</th>
                        <th>ID Asuransi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dtasr as $dt)
                    <tr>
                        <td>{{ $dt->id }}</td>
                        <td>{{ $dt->no_rekam }}</td>
                        <td>{{ $dt->id_asuransi }}</td>
                        <td>{{ $dt->keterangan }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('asuransi.destroy')}}" method="POST">
                                <a href="{{ route('dtasuransi.show')}}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('dtasuransi.edit')}}" class="btn btn-sm btn-warning">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                            
                        @empty
                        <div class="alert alert-danger">
                            Data Asuransi Pasien Masih Kosong.
                        </div>
                            
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection