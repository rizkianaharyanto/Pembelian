@extends('template.table')

@section('judul', 'Pembayaran Hutang')

@section('halaman', 'Pembayaran Hutang')

@section('thead')
<tr>
    <th>Kode Pembayaran</th>
    <th>Supplier</th>
    <th>Total</th>
    <th>Tanggal</th>
    <th>Akun</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($pembayarans as $pembayaran)
<tr>
    <td>{{ $pembayaran->kode_pembayaran }}</td>
    <td>Supplier</td>
    <td>{{ $pembayaran->total }}</td>
    <td>{{ $pembayaran->tanggal }}</td>
    <td>Akun</td>
    <td class="d-flex justify-content-between">
        <i onclick="" class="fas fa-info-circle"></i>
        <i onclick="" class="fas fa-edit"></i>
        <i onclick="" class="fas fa-trash"></i>
    </td>
</tr>
@endforeach
@endsection