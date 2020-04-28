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
    <h5 class="align-self-center">Akun A</h5>
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