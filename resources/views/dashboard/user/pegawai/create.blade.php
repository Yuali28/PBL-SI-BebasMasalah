<form method="POST" action="{{ route('dashboard.user.pegawai.store') }}" autocomplete="off">
    @csrf
    <div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_createLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body section">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="username">Username / NIK</label>
                        <input type="text" name="username" class="form-control shadow-sm @error('username') is-invalid @enderror" value="{{ old('username') }}" autocomplete="off" minlength="16" maxlength="16">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control shadow-sm @error('password') is-invalid @enderror" autocomplete="off">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control shadow-sm @error('nama') is-invalid @enderror" value="{{ old('nama') }}" maxlength="50">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control shadow-sm @error('telp') is-invalid @enderror" name="alamat" rows="2" maxlength="100">{{ old('alamat') }}</textarea>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" name="telp" class="form-control shadow-sm @error('telp') is-invalid @enderror" value="{{ old('telp') }}" minlength="10" maxlength="13">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" class="form-control shadow-sm @error('nip') is-invalid @enderror" value="{{ old('nip') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nidn">NIDN</label>
                        <input type="number" name="nidn" class="form-control shadow-sm @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="role">Jabatan</label>
                        <select class="form-control shadow-sm" name="role">
                            <option value="1" selected >Ketua Jurusan</option>
                            <option value="2">Admin Program Studi</option>
                            <option value="3">Admin Tugas Akhir</option>
                            <option value="4">Staff Keuangan</option>
                            <option value="5">Staff Perpustakaan</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="program_studi">Program Studi</label>
                        <select class="form-control shadow-sm" name="program_studi">
                            <option value="">-</option>
                            @foreach ($program_studi as $prodi)
                            <option value="{{ $prodi->id_prodi }}"
                                >{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control shadow-sm" name="jurusan">
                            <option value="">-</option>
                            @foreach ($jurusan as $jrsn)
                            <option value="{{ $jrsn->id_jurusan }}"
                                >{{ $jrsn->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control shadow-sm @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
                    </div>

                    <div class="col-md-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control shadow-sm" name="jenis_kelamin">
                            <option value="0" selected>Laki-laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="agama">Agama</label>
                        <select class="form-control shadow-sm" name="agama">
                            <option value="Islam" selected>Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div>

                </div>

                </div>
                <button type="submit" class="btn btn-flat btn-primary w-100 card-footer bg-primary">
                    <i class="fa fa-fw fa-save mr-2"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</form>
