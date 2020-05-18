@extends('template.table')

@section('judul', 'Penerimaan Barang')

@section('halaman', 'Penerimaan Barang')

@section('thead')
<tr>
    <th>Kode Penerimaan</th>
    <th>Supplier</th>
    <th>Tanggal</th>
    <th>Gudang</th>
    <th>Total</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($penerimaans as $penerimaan)
<tr>
    <td>{{ $penerimaan->kode_penerimaan }}</td>
    <td>Supplier</td>
    <td>{{ $penerimaan->tanggal }}</td>
    <td>Gudang</td>
    <td>{{ $penerimaan->total_harga }}</td>
    <td class="d-flex justify-content-between">
        <a id="details" href="/penerimaans/create">
            <i style="cursor: pointer; " class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a id="edit" href="/penerimaans/{{$penerimaan->id}}/edit">
            <i style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a id="delete" data-toggle="modal" data-target="#delete-{{$penerimaan->id }}">
            <i style="cursor: pointer;" class="fas fa-trash">
                <span></span>
            </i>
        </a>
    </td>
</tr>

@php
$delete = "delete-".$penerimaan->id
@endphp

<x-modal :id="$delete">
    <x-slot name="title">
        <h5 class="align-self-center">Hapus penerimaan {{$penerimaan->kode_penerimaan}}</h5>
    </x-slot>
    <x-slot name="body">
        <x-penerimaan-delete :id="$penerimaan->id" />
    </x-slot>
</x-modal>

@endforeach
@endsection


