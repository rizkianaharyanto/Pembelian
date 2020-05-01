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
                '<h5 class="align-self-center">Gudang A</h5>'
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