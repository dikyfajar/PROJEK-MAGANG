@extends('layouts.app')

@section('content')
    <div class="container">
        <hr>
        <h4>DATA PASIEN</h4>
        </hr>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-header">
                <a href="{{ route('pasien.create') }}"  class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <!-- <th>NIK</th>
                            <th>No. KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Telp. Pasien</th>
                            <th>Email</th>
                            <th>Alamat Pasien</th>
                            <th>ID Desa Pasien</th>
                            <th>Penanggung Jawab</th>
                            <th>Status PJ</th>
                            <th>Telp. PJ</th>
                            <th>Alamat PJ</th>
                            <th>ID Desa PJ</th>
                            <th>Status</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $pasien as $pas )
                        <tr>
                            <td>{{ $pas->no_rekam }}</td>
                            <td>{{ $pas->nama_pasien }}</td>
                            <!-- <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> -->
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');">
                                    <a href="#" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>

                        @empty
                            <div class="alert alert-danger">
                                Data Pasien Masih Kosong.
                            </div>

                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection