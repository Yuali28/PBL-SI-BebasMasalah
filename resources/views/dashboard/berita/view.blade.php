@php
include(base_path('resources/views/dashboard/berita/data.php'));
@endphp

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@include('dashboard.berita.create')
@include('dashboard.berita.edit')
@include('dashboard.berita.remove')

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
                    <li class="breadcrumb-item active"><a href="{{ route('dashboard.berita') }}">Berita</a></li>
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
                        <h3 class="card-title">Daftar Berita</h3>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/thumbnails/L9h1SF2Y4mrVmLhevdh5HJxuJNFwMjdwZCxczpbs.jpg') }}" alt="">
                        <div class="d-flex flex-row mb-3">
                            <x-adminlte-button class="mr-2" label="Tambah Berita" icon="fas fa-plus" theme="primary" data-toggle="modal" data-target="#modal_create"></x-adminlte-button>
                        </div>
                        <x-adminlte-datatable id="table_kajur" :heads="$heads" :config="$config"
                        bordered striped hoverable with-buttons checkbox/>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
        });
    </script>
@stop
