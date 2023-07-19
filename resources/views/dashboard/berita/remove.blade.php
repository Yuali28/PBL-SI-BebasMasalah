@foreach ($berita as $item)
        <div class="modal fade" id="modal_remove_{{ $item->id_berita }}" tabindex="-1" role="dialog" aria-labelledby="modal_remove_{{ $item->id_berita }}label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_remove_{{ $item->id_berita }}_label">Hapus Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body section">
                        <p>Apakah Anda yakin ingin menghapus berita ini?</p>
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-md-8">
                                : {{ $item->mahasiswa->nama }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nim">NIM / Kelas</label>
                            </div>
                            <div class="col-md-8">
                                : {{ $item->mahasiswa->nim }} / {{ $item->mahasiswa->kelas }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nim">Prodi / Jurusan</label>
                            </div>
                            <div class="col-md-8">
                                : {{ $item->mahasiswa->prodi->nama }} / {{ $item->mahasiswa->prodi->jurusan->nama }}
                            </div>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="{{ route('dashboard.berita.delete', $item->id_berita) }}">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endforeach