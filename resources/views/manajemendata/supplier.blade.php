@extends('template.table')

@section('judul', 'Supplier')

@section('halaman', 'Supplier')

<!-- section('isi')
<a href="/supplier/create">Tambah Supplier</a>

endsection -->

@section('thead')
<tr>
    <th>Kode Supplier</th>
    <th>Nama Supplier</th>
    <th>Telp</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($suppliers as $supplier)
<tr>
    <td>{{ $supplier->kode_supplier }}</td>
    <td>{{ $supplier->nama_supplier }}</td>
    <td>{{ $supplier->telp_supplier }}</td>
    <td class="d-flex justify-content-between">
        <a id="details" data-toggle="modal" data-target="#modal" data-id="{{ $supplier->id }}">
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

<!-- <script>
    $("a").click(function() {
        var ini = $(this).data("id");
        console.log(ini);
        $.get("/suppliers/"+ini, function(data) {
            // console.log(data);
            $('#nama_supplier').html("HELLO HELLO");
        });
    })
</script> -->

<script>
    $("a").click(function() {
        var id = $(this).attr("id");
        console.log(id);
        if (id == "details") {
            // $('#lebarmodal').addClass('modal-xl');
            $('#judulmodal').html(
                '<i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i> ' +
                '<h5 id = "nama_supplier" class = "align-self-center"> Supplier </h5>'
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
            $('#judulmodal').html(
                '<h5 class="align-self-center">Edit Supplier</h5>'
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
            $('#judulmodal').html(
                '<h5 class="align-self-center">Hapus Supplier</h5>'
            );
            $('#bodymodal').html(
                '<p>Apakah kamu yakin ingin menghapus Supplier A ?</p>'
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
<a data-toggle="modal" data-target="#DatamodalTambah">
    <i id="tambah" onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
    </i>
</a>
@endsection

@section('judulTambah')
<h5 class="align-self-center">Tambah Supplier</h5>
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


