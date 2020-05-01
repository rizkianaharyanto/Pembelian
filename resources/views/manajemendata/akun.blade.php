@extends('template.table')

@section('judul', 'Akun')

@section('halaman', 'Akun')

@section('thead')
<tr>
    <th>Kode Akun</th>
    <th>Nama Akun</th>
    <th>Tipe Akun</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($akuns as $akun)
<tr>
    <td>{{ $akun->kode_akun }}</td>
    <td>{{ $akun->nama_akun }}</td>
    <td>{{ $akun->tipe_akun }}</td>
    <td class="d-flex justify-content-center">
        <a id="details" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
    </td>
</tr>
@endforeach


<script>
    $("a").click(function() {
        var id = $(this).attr("id");
        console.log(id);
        if (id == "details") {
            $('#lebarmodal').removeClass('modal-xl');
            $('#judulmodal').html(
                '<h5 class="align-self-center">Akun A</h5>'
            );
            $('#bodymodal').html(
                '<form>' +
                '<fieldset disabled>' +
                '<div class="form-group">' +
                '<label for="disabledTextInput">Email</label>' +
                '<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="disabledTextInput">Telp</label>' +
                '<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">' +
                '</div>' +
                '</fieldset>' +
                '</form>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>'
            );
        } 
    })
</script>
@endsection

