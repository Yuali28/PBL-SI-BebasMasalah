@foreach ($users as $user)
@if ($user->fk_mahasiswa && $user->mahasiswa->fk_prodi == auth()->user()->pegawai->fk_prodi)

<form method="POST" action="{{ route('dashboard.user.mahasiswa.delete', $user->id_user) }}" autocomplete="off">
    @method('DELETE')
    @csrf
    <div class="modal fade" id="modal_remove_{{ $user->id_user }}" tabindex="-1" role="dialog" aria-labelledby="modal_remove_{{ $user->id_user }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_remove_{{ $user->id_user }}Label">Hapus Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body section px-4">
                    <p>Apakah anda yakin untuk menghapus mahasiswa ini?</p>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-8">
                            : {{ $user->mahasiswa->nama }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nim">NIM / Kelas</label>
                        </div>
                        <div class="col-md-8">
                            : {{ $user->mahasiswa->nim }} / {{ $user->mahasiswa->kelas }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nim">Prodi / Jurusan</label>
                        </div>
                        <div class="col-md-8">
                            : {{ $user->mahasiswa->prodi->nama }} / {{ $user->mahasiswa->prodi->jurusan->nama }}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-flat btn-danger w-100 card-footer bg-danger">
                    <i class="fa fa-fw fa-trash mr-2"></i> Hapus
                </button>
            </div>
        </div>
    </div>
</form>

@endif
@endforeach
