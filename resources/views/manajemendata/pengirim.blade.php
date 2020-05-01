@extends('template.table')

@section('judul', 'Pengirim')

@section('halaman', 'Pengirim')

<!-- section('isi')
<a href="/pengirim/create">Tambah Pengirim</a>
endsection -->

@section('thead')
<tr>
    <th>No</th>
    <th>Supplier</th>
    <th>Nama Pengirim</th>
    <th>Telp</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($pengirims as $pengirim)
<tr>
    <td>{{ $pengirim->kode_pengirim }}</td>
    <td>Supplier</td>
    <td>{{ $pengirim->nama_pengirim }}</td>
    <td>{{ $pengirim->telp_pengirim }}</td>
    <td class="d-flex justify-content-between">
        <a id="details" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a id="edit" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a id="delete" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-trash">
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
                '<i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>' +
                '<h5 class="align-self-center">Pengirim A</h5>'
            );
            $('#bodymodal').html(
                '<form>' +
                '<fieldset class="detail-modal" disabled>' +
                '<div class="form-group ">' +
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
        } else if (id == "edit") {
            $('#lebarmodal').removeClass('modal-xl');
            $('#judulmodal').html(
                '<h5 class="align-self-center">Edit Pengirim</h5>'
            );
            $('#bodymodal').html(
                '<form>' +
                '<div class="form-group d-inline-flex">' +
                '<i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>' +
                '<input type="file" class="form-control-file align-self-center" id="exampleFormControlFile1">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Email</label>' +
                '<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for = "exampleFormControlInput1" > Telp </label>' +
                '<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">' +
                '</div>' +
                '</form>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button type="button" class="btn btn-primary">Simpan</button>'
            );
        } else if (id == "delete") {
            $('#lebarmodal').removeClass('modal-xl');
            $('#judulmodal').html(
                '<h5 class="align-self-center">Hapus Pengirim</h5>'
            );
            $('#bodymodal').html(
                '<p>Apakah kamu yakin ingin menghapus Pengirim A ?</p>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button type="button" class="btn btn-danger">Hapus</button>'
            );
        }
    })
</script>
@endsection



<!-- Tambah -->
@section('tambah')
<a data-toggle="modal" data-target="#modal">
    <i id="tambah" onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
    </i>
</a>
@endsection

@section('judulTambah')
<h5 class="align-self-center">Tambah Pengirim</h5>
@endsection

@section('bodyTambah')

<form>
    <div class="form-group d-inline-flex">
        <i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>
        <input type="file" class="form-control-file align-self-center" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Telp</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
</form>
@endsection
