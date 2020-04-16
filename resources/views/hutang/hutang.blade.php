@extends('template.table')

@section('judul', 'Hutang')

@section('halaman', 'Hutang')

@section('thead')
<tr>
    <th>Hutang id</th>
    <th>Supplier</th>
    <th>Total Hutang</th>
    <th>Total Lunas</th>
    <th>Total Sisa</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@for ($i = 1; $i < 50; $i++)
<tr>
    <td>{{ $i }}</td>
    <td>Supplier {{ $i }}</td>
    <td>Hutang {{ $i }}</td>
    <td>Lunas {{ $i }}</td>
    <td>Sisa {{ $i }}</td>
    <td class="d-flex justify-content-between">
        <i onclick="" class="fas fa-info-circle"></i>
        <i onclick="" class="fas fa-edit"></i>
        <i onclick="" class="fas fa-trash"></i>
    </td>
</tr>
@endfor
@endsection