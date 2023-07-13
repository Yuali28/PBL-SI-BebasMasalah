@extends('adminlte::page')

@section('content_header')
    <h1>Berita</h1>
@stop

@section('content')
<div class="container">
    <h1>Daftar Berita</h1>

    <a href="{{ route('dashboard.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

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
                    <td>{{ $berita->konten_berita }}</td>      
                    <td>{{ $berita->status_berita }}</td>
                    <td>
                        <a href="{{ route('dashboard.berita.create', $berita->id) }}" class="btn btn-info">Detail</a>
                        {{-- <a href="{{ route('dashboard.berita.edit', $berita->id) }}" class="btn btn-primary">Edit</a> --}}
                        <form action="{{ route('dashboard.berita.view', $berita->id_berita) }}" method="POST" class="d-inline">
                            @csrf
                            @method('EDIT')
                            <button type="submit" class="btn btn-success">Edit</button>
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

