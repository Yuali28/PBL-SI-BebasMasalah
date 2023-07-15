@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Berita</h2>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $berita->judul }}" required>
            </div>

            <div class="form-group">
                <label for="konten">Konten:</label>
                <textarea name="konten" id="konten" class="form-control" required>{{ $berita->konten }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
