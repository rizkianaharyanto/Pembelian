@extends('template.table')

@section('judul', 'Barang')

@section('halaman', 'Barang')

@section('thead')
<tr>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Harga Barang</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($barangs as $barang)
<tr>
    <td>{{ $barang->kode_barang }}</td>
    <td>{{ $barang->nama_barang }}</td>
    <td>{{ $barang->harga_barang }}</td>
    <td class="d-flex justify-content-between">
    <a data-toggle="modal" data-target="#modalDetailsData">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
    </td>
    </tr>
    @endforeach
    @endsection


    <!-- Details -->
    @section('judulDetails')
    <i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i>
    <h5 class="align-self-center">Barang A</h5>
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