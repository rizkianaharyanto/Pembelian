@extends('template.template')

@section('judul', 'edit')

@section('halaman', 'Edit Faktur')

@section('isi')

<x-faktur-edit :id="$faktur->id" />

@endsection