@extends('adminlte::page')

@section('title', 'Hapus Berita')

@section('content_header')
    <h1>Hapus Berita</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Form konfirmasi hapus berita -->
            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <p>Anda yakin ingin menghapus berita ini?</p>

                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@stop
