@php
include(base_path('resources/views/dashboard/user/mahasiswa/data.php'));
@endphp

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@include('dashboard.user.mahasiswa.create')
@include('dashboard.user.mahasiswa.edit')
@include('dashboard.user.mahasiswa.remove')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bebas Masalah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">Bebas Masalah</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar User Mahasiswa Prodi {{ auth()->user()->pegawai->prodi->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-row mb-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modal_create">
                                <i class="fas fa-plus mr-2"></i>Tambah Mahasiswa
                            </button>
                        </div>
                        <x-adminlte-datatable id="table_kajur" :heads="$heads" :config="$config"
                        bordered striped hoverable with-buttons checkbox/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('js')
    <script>
        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
        });
    </script>
@stop
