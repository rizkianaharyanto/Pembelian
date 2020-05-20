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
        <a id="details" data-toggle="modal" data-target="#modal" data-id="{{ $pengirim->id }}">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a id="edit" data-toggle="modal" data-target="#modal" data-id="{{ $pengirim->id }}">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a id="delete" data-toggle="modal" data-target="#modal" data-id="{{ $pengirim->id }}">
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
        var ini = $(this).data("id");
        console.log(ini);
        $.get("/pengirims/" + ini, function(datanya) {
            if (id == "details") {
                $('#lebarmodal').removeClass('modal-xl');
                $('#footermodal').addClass('modal-footer');
                $('#judulmodal').html(
                    '<i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i> ' +
                    '<h5 id = "nama_pengirim" class = "align-self-center">' + datanya[0].nama_pengirim + '</h5>'
                );
                $('#bodymodal').html(
                    '<form>' +
                    '<fieldset class="detail-modal" disabled>' +
                    '<div class="form-group">' +
                    '<label for="telp_pengirim">Telp</label>' +
                    '<input type="number" class="form-control" id="telp_pengirim" name="telp_pengirim" placeholder="' + datanya[0].telp_pengirim + '">' +
                    '</div>' +
                    '<label for="nama_supplier">Supplier</label>' +
                    '<input type="text" class="form-control" id="nama_supplier" name="nama_supplier" placeholder="' + datanya[0].supplier_id + '">' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<label for="email_pengirim">Email</label>' +
                    '<input type="email" class="form-control" id="email_pengirim" name="email_pengirim" placeholder="' + datanya[0].email_pengirim + '">' +
                    '</div>' +
                    '</fieldset>' +
                    '</form>'
                );
                $('#footermodal').html(
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>'
                );
            } else if (id == "edit") {
                $('#lebarmodal').removeClass('modal-xl');
                $('#footermodal').empty();
                $('#judulmodal').html(
                    '<h5 class="align-self-center">Edit Pengirim ' + datanya[0].nama_pengirim + '</h5>'
                );
                $('#bodymodal').html(
                    '<form method="POST" action="/pengirims/' + datanya[0].id + '">' +
                    '@method("patch")' +
                    '@csrf' +
                    '<div class="form-group">' +
                    '<label for="nama_pengirim">Nama</label>' +
                    '<input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="' + datanya[0].nama_pengirim + '">' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<label for="telp_pengirim">Telp</label>' +
                    '<input type="number" class="form-control" id="telp_pengirim" name="telp_pengirim" value="' + datanya[0].telp_pengirim + '">' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<label for="email_pengirim">Email</label>' +
                    '<input type="email" class="form-control" id="email_pengirim" name="email_pengirim" value="' + datanya[0].email_pengirim + '">' +
                    '</div>' +
                    '<div class="form-group modal-footer">' +
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                    '<button type="submit" class="btn btn-primary">Simpan</button>' +
                    '</div>' +
                    '</form>'
                );
            } else if (id == "delete") {
                $('#lebarmodal').removeClass('modal-xl');
                $('#footermodal').addClass('modal-footer');
                $('#judulmodal').html(
                    '<h5 class="align-self-center">Hapus Pengirim</h5>'
                );
                $('#bodymodal').html(
                    '<p>Apakah kamu yakin ingin menghapus Pengirim ' + datanya[0].nama_pengirim + ' ?</p>'
                );
                $('#footermodal').html(
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                    '<form method="POST" action="/pengirims/' + datanya[0].id + '">' +
                    '@method("delete")' +
                    '@csrf' +
                    '<button type="submit" class="btn btn-danger">Hapus</button>' +
                    '</form>'
                );
            }
        });
    })
</script>
@endsection



<!-- Tambah -->
@section('tambah')
<a data-toggle="modal" data-target="#modaltambah">
    <i id="tambah" onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
    </i>
</a>
@endsection

@section('judulTambah')
<h5 class="align-self-center">Tambah Pengirim</h5>
@endsection

@section('bodyTambah')

<form method="POST" action="/pengirims">
    @csrf
    <div class="form-group d-inline-flex">
        <i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>
        <input type="file" class="form-control-file align-self-center" id="foto">
    </div>
    <input type="hidden" id="kode_pengirim" name="kode_pengirim" placeholder="" value="PENG">
    <div class="form-group">
        <label for="nama_pengirim">Nama pengirim</label>
        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="">
    </div>
    <div class="form-group">
        <label for="nama_supplier">Supplier</label>
        <select class="form-control" id="nama_supplier">
            @foreach ($suppliers as $supplier)
            <option>{{ $supplier->nama_supplier }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="telp_pengirim">Telp</label>
        <input type="number" class="form-control" id="telp_pengirim" name="telp_pengirim" placeholder="">
    </div>
    <div class="form-group">
        <label for="email_pengirim">Email</label>
        <input type="email" class="form-control" id="email_pengirim" name="email_pengirim" placeholder="">
    </div>

    @endsection