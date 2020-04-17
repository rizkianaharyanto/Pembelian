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
@for ($i = 1; $i < 50; $i++) <tr>
    <td>{{ $i }}</td>
    <td>Supplier {{ $i }}</td>
    <td>Nama {{ $i }}</td>
    <td>Telp {{ $i }}</td>
    <td class="d-flex justify-content-between">
        <a data-toggle="modal" data-target="#modalDetailsData">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a data-toggle="modal" data-target="#modalEditData">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a data-toggle="modal" data-target="#modalDelete">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-trash">
                <span></span>
            </i>
        </a>
    </td>
    </tr>
    @endfor
    @endsection


    <!-- Details -->
    @section('judulDetails')
    <i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>
    <h5 class="align-self-center">Pengirim A</h5>
    @endsection

    @section('bodyDetails')

    <form>
        <fieldset disabled>
            <div class="form-group">
                <label for="disabledTextInput">Email</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Telp</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
        </fieldset>
    </form>

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

    <!-- Edit -->
    @section('judulEdit')
    <h5 class="align-self-center">Edit Pengirim</h5>
    @endsection

    @section('bodyEdit')

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

    <!-- Delete -->
    @section('judulDelete')
    <h5 class="align-self-center">Hapus Pengirim</h5>
    @endsection

    @section('bodyDelete')
    <p>Apakah kamu yakin ingin menghapus Pengirim A ?</p>
    @endsection