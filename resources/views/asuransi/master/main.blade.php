@extends('layouts.app')

@section('content')
    <div class="container">
        <hr>
        <h4>MASTER DATA</h4>
        </hr>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-header">
                <a href="{{ route('asuransi.create') }}"  class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Asuransi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $master as $master )
                        <tr>
                            <td>{{ $master->id }}</td>
                            <td>{{ $master->nama_asuransi }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('asuransi.destroy', $master->id) }}" method="POST">
                                    <a href="{{ route('asuransi.show', $master->id ) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('asuransi.edit', $master->id ) }}" class="btn btn-sm btn-warning">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>

                        @empty
                            <div class="alert alert-danger">
                                Daftar Asuransi Masih Kosong.
                            </div>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection