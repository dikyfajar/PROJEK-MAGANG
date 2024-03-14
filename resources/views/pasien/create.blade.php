@extends('layouts.app')

@section('content')
<div class="container"><br \>
    <h3>TAMBAH DATA PASIEN</h3>
    <div class="card">
        <!-- <div class="card-header">
            <h5>FORM IDENTITAS</h5>
        </div> -->
        <div class="card-body">
            <form class="row g-3">
                <h5>Identitas Pasien</h5>
                <hr \>
                <div class="col-md-4">
                    <label for="no_rekam" class="form-label">Nomor Rekam Medis</label>
                    <input type="text" class="form-control" id="no_rekam" placeholder="Nomor">
                </div>
                <div class="col-md-6">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" placeholder="Nama Pasien">
                </div>
                <div class="col-md-2">
                    <label for="jkelamin" class="form-label">Jenis Kelamin</label>
                    <select id="jkelamin" class="form-select">
                    <option selected>Pilih...</option>
                    <option>L</option>
                    <option>P</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir">
                </div>
                <div class="col-md-4">
                    <label for="telp_pasien" class="form-label">No. Telp. Pasien</label>
                    <input type="text" class="form-control" id="telp_pasien" placeholder="Masukkan Nomor">
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="col-md-4">
                    <label for="alamat_pas" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pas" placeholder="Masukkan Alamat">
                </div>
                <div class="col-md-4">
                    <label for="id_desa_pas" class="form-label">ID Desa Pasien</label>
                    <select id="id_desa_pas" class="form-select">
                    <option selected>Pilih Desa</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kec_pasien" class="form-label">Kecamatan</label>
                    <select id="kec_pasien" class="form-select">
                    <option selected>Pilih Kecamatan</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kab_pasien" class="form-label">Kabupaten/Kota</label>
                    <select id="kab_pasien" class="form-select">
                    <option selected>Pilih Kabupaten</option>
                    <option ></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="prov_pasien" class="form-label">Provinsi</label>
                    <select id="prov_pasien" class="form-select">
                    <option selected>Pilih Provinsi</option>
                    @foreach ($provinsi as $prov)
                    <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="status_pasien" class="form-label">Status</label>
                    <select id="status_pasien" class="form-select">
                    <option selected>Choose...</option>
                    <option>Active</option>
                    <option>Nonactive</option>
                    </select>
                </div>
                <hr \>
                <h5>Identitas Penanggung Jawab</h5>
                <hr \>
                <div class="col-md-6">
                    <label for="nama_pj" class="form-label">Nama Penanggung Jawab</label>
                    <input type="text" class="form-control" id="nama_pj" placeholder="Nama PJ">
                </div>
                <div class="col-md-6">
                    <label for="status_pj" class="form-label">Status Penanggung Jawab</label>
                    <select id="status_pj" class="form-select">
                        <option selected>--Pilih--</option>
                        <option>Saudara</option>
                        <option>Suami/Istri</option>
                        <option>Lainnya...</option>
                        </select>                
                    </div>
                <div class="col-md-6">
                    <label for="telp_pj" class="form-label">No. Telp. PJ</label>
                    <input type="text" class="form-control" id="telp_pj" placeholder="Masukkan Nomor">
                </div>
                <div class="col-md-6">
                    <label for="alamat_pas" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_pas" placeholder="Masukkan Alamat">
                </div>
                <div class="col-md-2">
                    <label for="id_desa_pj" class="form-label">ID Desa PJ</label>
                    <select id="id_desa_pj" class="form-select">
                    <option selected>Pilih Desa</option>
                    <option>...</option>
                    </select>                
                </div>
                <div class="col-md-2">
                    <label for="kec_pj" class="form-label">Kecamatan</label>
                    <select id="kec_pj" class="form-select">
                    <option selected>Pilih Kecamatan</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="kab_pj" class="form-label">Kabupaten/Kota</label>
                    <select id="kab_pj" class="form-select">
                    <option selected>Pilih Kabupaten</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="prov_pj" class="form-label">Provinsi</label>
                    <select id="prov_pj" class="form-select">
                    <option selected>Pilih Provinsi</option>
                    <option ></option>
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

<script>
    $('#prov_pasien').change(function() {
        var kodeprovinsi = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih Kabupaten</option>';
        $.ajax({
            url: "{{ route('kabupaten') }}",
            method: "GET",
            data: {
                id: kodeprovinsi
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['nama'] + '</option>';
                }
                $('#kab_pasien').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });
    $('#kab_pasien').change(function() {
        var kodeKabupaten = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih Kecamatan</option>';
        $.ajax({
            url: "{{ route('kecamatan') }}",
            method: "GET",
            data: {
                id: kodeKabupaten
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['nama'] + '</option>';
                }
                $('#kec_pasien').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });
    $('#kec_pasien').change(function() {
        var kodeKecamatan = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih Desa</option>';
        $.ajax({
            url: "{{ route('desa') }}",
            method: "GET",
            data: {
                id: kodeKecamatan
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['nama'] + '</option>';
                }
                $('#id_desa_pas').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });
</script>

@endsection
