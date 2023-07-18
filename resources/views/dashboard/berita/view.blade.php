@extends('adminlte::page')

@section('content_header')

@include('dashboard.berita.create')

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
                <li class="breadcrumb-item active"><a href="#">Berita</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop

@section('content')

@if ($errors->any())
<x-adminlte-callout theme="danger" title-class="text-danger text-uppercase"
    icon="fas fa-lg fa-exclamation-circle" title="Gagal membuat berita!">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</x-adminlte-callout>
@endif

<div class="container">
    <h1>Daftar Berita</h1>
    <div class="d-flex flex-row mb-3">
        <x-adminlte-button class="mr-2" label="Tambah Berita" icon="fas fa-plus" theme="primary" data-toggle="modal" data-target="#modal_create"></x-adminlte-button>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail Berita</th>
                <th>Judul Berita</th>
                <th>Konten Berita</th>
                <th>Status Berita</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($berita as $berita)
                <tr>
                    <td>{{ $berita->thumbnail_berita }}</td>
                    <td>{{ $berita->judul_berita }}</td>
                    <td>{{ htmlspecialchars_decode($berita->konten_berita) }}</td>
                    <td>{{ $berita->status_berita }}</td>
                    <td>
                        <a href="{{ route('dashboard.berita.create', $berita->id) }}" class="btn btn-success">Edit</a>
                        {{-- <a href="{{ route('dashboard.berita.edit', $berita->id) }}" class="btn btn-primary">Edit</a> --}}
                        <form action="{{ route('dashboard.berita', $berita->id_berita) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

