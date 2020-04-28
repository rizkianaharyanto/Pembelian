@extends('template.table')

@section('judul', 'Pajak')

@section('halaman', 'Pajak')

@section('thead')
<tr>
    <th>Kode Pajak</th>
    <th>Nama Pajak</th>
    <th>Presentase</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($pajaks as $pajak)
<tr>
    <td>{{ $pajak->kode_pajak }}</td>
    <td>{{ $pajak->nama_pajak }}</td>
    <td>{{ $pajak->pajak }}</td>
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
    <h5 class="align-self-center">Pajak A</h5>
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