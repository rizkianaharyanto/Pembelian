@extends('template.table')

@section('judul', 'Faktur')

@section('halaman', 'Faktur')

@section('thead')
<tr>
    <th>Kode Faktur</th>
    <th>Supplier</th>
    <th>Tanggal</th>
    <th>Total</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($fakturs as $faktur)
<tr>
    <td>{{ $faktur->kode_faktur }}</td>
    <td>Supplier</td>
    <td>{{ $faktur->tanggal }}</td>
    <td>{{ $faktur->total_harga }}</td>
    <td class="d-flex justify-content-between">
        <a id="details" data-toggle="modal" data-target="#details">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a id="edit" data-toggle="modal" data-target="#edit">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a id="delete" data-toggle="modal" data-target="#delete">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-trash">
                <span></span>
            </i>
        </a>
    </td>
</tr>
@endforeach

<x-faktur-insert />

<x-modal id="details" class="modal-xl">
    <x-slot name="body">
        isi modal details
    </x-slot>
</x-modal>


<x-faktur-edit :id="$faktur->id" />


<x-faktur-delete />


@endsection

@section('tambah')
<a data-toggle="modal" data-target="#insert">
    <i onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
    </i>
</a>
@endsection