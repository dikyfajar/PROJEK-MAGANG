<script>
    // start ajax alamat pasien

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
                $('#desa_pasien').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });

    $('#desa_pasien').change(function() {
        var kodeDesa = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih ID Desa</option>';
        $.ajax({
            url: "{{ route('idDesa') }}",
            method: "GET",
            data: {
                id: kodeDesa
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['id'] + '</option>';
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

    // end ajax alamat pasien


    // start ajax alamat pj

    $('#prov_pj').change(function() {
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
                $('#kab_pj').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });

    $('#kab_pj').change(function() {
        var kodekab = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih Kecamatan</option>';
        $.ajax({
            url: "{{ route('kecamatan') }}",
            method: "GET",
            data: {
                id: kodekab
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['nama'] + '</option>';
                }
                $('#kec_pj').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });

    $('#kec_pj').change(function() {
        var kodekec = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih Desa</option>';
        $.ajax({
            url: "{{ route('desa') }}",
            method: "GET",
            data: {
                id: kodekec
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['nama'] + '</option>';
                }
                $('#desa_pj').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });

    $('#desa_pj').change(function() {
        var kodeds = $(this).find('option:selected').attr('value');
        //console.log(kodeprovinsi);
        
        var draw = '<option selected>Pilih ID Desa</option>';
        $.ajax({
            url: "{{ route('idDesa') }}",
            method: "GET",
            data: {
                id: kodeds
            },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.length; i++) {
                    draw += '<option value="' + data[i]['id'] + '">' + data[i]['id'] + '</option>';
                }
                $('#id_desa_pj').html(draw);
                // $('#kec_pasien').html('<option>Pilih Kecamatan</option>');
                
                $(".form-select").selectpicker("refresh");
            },
            error: function(xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err.Message);
            }
        });
    });

    // end ajax alamat pj
</script>