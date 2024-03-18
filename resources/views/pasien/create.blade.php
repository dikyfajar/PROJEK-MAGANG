@extends('layouts.app')

@section('content')
<div class="container"><br \>
    <h3>TAMBAH DATA PASIEN</h3>
    <div class="card">
        <!-- <div class="card-header">
            <h5>FORM IDENTITAS</h5>
        </div> -->
        <div class="card-body">
            <form class="row g-3" action="{{ route('pasien.store') }}" method="POST">
                @csrf
                <h5>Identitas Pasien</h5>
                <hr \>
                <div class="col-md-4">
                    <label for="no_rekam" class="form-label">Nomor Rekam Medis</label>
                    <input type="text" class="form-control" id="no_rekam" placeholder="Nomor" name="no_rekam">
                </div>
                <div class="col-md-6">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien" placeholder="Nama Pasien" name="nama_pasien">
                    <!-- error message untuk nama -->
                    @error('nama_pasien')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-2">
                    <label for="jkelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jkelamin" class="form-select @error('jkelamin') is-invalid @enderror" name="jkelamin">
                    <option selected>Pilih...</option>
                    <option>L</option>
                    <option>P</option>
                    </select>
                    <!-- error message -->
                    @error('jkelamin')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="nik" class="form-label">NIK Pasien</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="NIK Pasien" name="nik">
                    <!-- error message -->
                    @error('nik')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="kk" class="form-label">KK Pasien</label>
                    <input type="text" class="form-control @error('kk') is-invalid @enderror" id="kk" placeholder="No. KK Pasien" name="kk">
                    <!-- error message -->
                    @error('kk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="col-md-4">
                    <label for="telp_pasien" class="form-label">No. Telp. Pasien</label>
                    <input type="text" class="form-control" id="telp_pasien" placeholder="Masukkan Nomor" name="telp_pasien">
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                </div>
                <div class="col-md-4">
                    <label for="prov_pasien" class="form-label">Provinsi</label>
                    <select id="prov_pasien" class="form-select" name="prov_pas">
                        <option selected>Pilih Provinsi</option>
                        @foreach ($provinsi as $prov)
                        <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kab_pasien" class="form-label">Kabupaten/Kota</label>
                    <select id="kab_pasien" class="form-select" name="kab_pas">
                        <option selected>Pilih Kabupaten</option>
                        <option ></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kec_pasien" class="form-label">Kecamatan</label>
                    <select id="kec_pasien" class="form-select" name="kec_pas">
                        <option selected>Pilih Kecamatan</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="desa_pasien" class="form-label">Desa</label>
                    <select id="desa_pasien" class="form-select" name="desa_pas">
                        <option selected>Pilih Desa</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="alamat_pas" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pas" placeholder="Ex : RT 00 RW 00 DSN XXXX" name="alamat_pas">
                </div>
                <div class="col-md-2">
                    <label for="id_desa_pas" class="form-label">ID Desa Pasien</label>
                    <select id="id_desa_pas" class="form-select" name="id_desa_pas">
                        <option selected>Pilih ID Desa</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="status_pasien" class="form-label">Status</label>
                    <select id="status_pasien" class="form-select" name="status_pasien">
                        <option selected>Choose...</option>
                        <option>A</option>
                        <option>N</option>
                    </select>
                </div>
                <hr \>
                <h5>Identitas Penanggung Jawab</h5>
                <hr \>
                <div class="col-md-6">
                    <label for="nama_pj" class="form-label">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" id="nama_pj" placeholder="Nama PJ" name="nama_pj">
                </div>
                <div class="col-md-3">
                    <label for="status_pj" class="form-label">Status Penanggung Jawab</label>
                    <select id="status_pj" class="form-select" name="status_pj">
                        <option selected>--Pilih--</option>
                        <option>Keluarga</option>
                        <option>Suami/Istri</option>
                        <option>Saudara</option>
                        <option>Lainnya...</option>
                    </select>                
                </div>
                <div class="col-md-3">
                    <label for="telp_pj" class="form-label">No. Telp. PJ</label>
                    <input type="text" class="form-control" id="telp_pj" placeholder="Masukkan Nomor" name="telp_pj">
                </div>
                <div class="col-md-3">
                    <label for="prov_pj" class="form-label">Provinsi</label>
                    <select id="prov_pj" class="form-select" name="prov_pj">
                        <option selected>Pilih Provinsi</option>
                        @foreach ($provinsi as $prov)
                        <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-3">
                    <label for="kab_pj" class="form-label">Kabupaten/Kota</label>
                    <select id="kab_pj" class="form-select" name="kab_pj">
                        <option selected>Pilih Kabupaten</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kec_pj" class="form-label">Kecamatan</label>
                    <select id="kec_pj" class="form-select" name="kec_pj">
                        <option selected>Pilih Kecamatan</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="desa_pj" class="form-label">Desa</label>
                    <select id="desa_pj" class="form-select" name="desa_pj">
                        <option selected>Pilih Desa</option>
                        <option>...</option>
                    </select>                
                </div>
                <div class="col-md-6">
                    <label for="alamat_pj" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pj" placeholder="Ex : RT 00 RW 00 DSN XXXX" name="alamat_pj">
                </div>
                <div class="col-md-2">
                    <label for="id_desa_pj" class="form-label">ID Desa PJ</label>
                    <select id="id_desa_pj" class="form-select" name="id_desa_pj">
                        <option selected>Pilih ID Desa</option>
                        <option>...</option>
                    </select>                
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                </div>
            </form>
        </div>
    </div>            
</div>

@include('includes.ajax')

@endsection
