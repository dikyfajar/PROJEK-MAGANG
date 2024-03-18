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
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
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
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $pasien as $pas )
                        <tr>
                            <td>{{ $pas->no_rekam }}</td>
                            <td>{{ $pas->nama_pasien }}</td>
                            <td>{{ $pas->nik }}</td>
                            <td>{{ $pas->kk }}</td>
                            <td>{{ $pas->jenis_kelamin }}</td>
                            <td>{{ $pas->tgl_lahir }}</td>
                            <td>{{ $pas->telp_pasien }}</td>
                            <td>{{ $pas->email }}</td>
                            <td>{{ $pas->alamat_pasien }}</td>
                            <td>{{ $pas->id_desa_pasien }}</td>
                            <td>{{ $pas->nama_pj }}</td>
                            <td>{{ $pas->status_pj }}</td>
                            <td>{{ $pas->telp_pj }}</td>
                            <td>{{ $pas->alamat_pj }}</td>
                            <td>{{ $pas->id_desa_pj }}</td>
                            <td>{{ $pas->status }}</td>
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