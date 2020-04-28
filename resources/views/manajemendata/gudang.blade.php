@extends('template.table')

@section('judul', 'Gudang')

@section('halaman', 'Gudang')

@section('thead')
<tr>
    <th>Kode Gudang</th>
    <th>Nama Gudang</th>
    <th>Telp</th>
    <th>Status</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($gudangs as $gudang)
<tr>
    <td>{{ $gudang->kode_gudang }}</td>
    <td>{{ $gudang->nama_gudang }}</td>
    <td>{{ $gudang->telp_gudang }}</td>
    <td>{{ $gudang->status_gudang }}</td>
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
    <h5 class="align-self-center">Gudang A</h5>
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