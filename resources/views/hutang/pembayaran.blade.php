@extends('template.table')

@section('judul', 'Pembayaran Hutang')

@section('halaman', 'Pembayaran Hutang')

@section('thead')
<tr>
    <th>Pembayaran Id</th>
    <th>Supplier</th>
    <th>Total</th>
    <th>Tanggal</th>
    <th>Akun</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@for ($i = 1; $i < 50; $i++)
<tr>
    <td>{{ $i }}</td>
    <td>Supplier {{ $i }}</td>
    <td>Total {{ $i }}</td>
    <td>Tanggal {{ $i }}</td>
    <td>Akun {{ $i }}</td>
    <td class="d-flex justify-content-between">
        <i onclick="" class="fas fa-info-circle"></i>
        <i onclick="" class="fas fa-edit"></i>
        <i onclick="" class="fas fa-trash"></i>
    </td>
</tr>
@endfor
@endsection