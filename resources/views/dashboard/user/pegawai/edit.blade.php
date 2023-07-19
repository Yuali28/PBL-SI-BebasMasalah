@php
$roleArray = [1 => 'Ketua Jurusan', 2 => 'Admin Program Studi', 3 => 'Admin Tugas Akhir', 4 => 'Staff Keuangan', 5 => 'Staff Perpustakaan'];
$agamaArray = ['Islam' => 'Islam', 'Buddha' => 'Buddha', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu'];
$genderArray = ['Laki-laki', 'Perempuan'];
@endphp

@foreach ($users as $user)
<form method="POST" action="{{ route('dashboard.user.pegawai.put', $user->id_user) }}" autocomplete="off">
    @method('PUT')
    @csrf
    <div class="modal fade" id="modal_edit_{{ $user->id_user }}" tabindex="-1" role="dialog" aria-labelledby="modal_editLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_editLabel">Edit Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body section">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="username">Username / NIK</label>
                        <input type="text" name="username" class="form-control shadow-sm @error('username') is-invalid @enderror" value="{{ $user->pegawai->nik }}" autocomplete="off" minlength="16" maxlength="16">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control shadow-sm @error('password') is-invalid @enderror" autocomplete="off">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control shadow-sm @error('nama') is-invalid @enderror" value="{{ $user->pegawai->nama }}" maxlength="50">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control shadow-sm @error('telp') is-invalid @enderror" name="alamat" rows="2" maxlength="100">{{ $user->pegawai->alamat }}</textarea>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" name="telp" class="form-control shadow-sm @error('telp') is-invalid @enderror" value="{{ $user->pegawai->telp }}" minlength="10" maxlength="13">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm @error('email') is-invalid @enderror" value="{{ $user->email }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" class="form-control shadow-sm @error('nip') is-invalid @enderror" value="{{ $user->pegawai->nip }}" maxlength="18">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nidn">NIDN</label>
                        <input type="number" name="nidn" class="form-control shadow-sm @error('nidn') is-invalid @enderror" value="{{ $user->pegawai->nidn }}" maxlength="10">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="role">Jabatan</label>
                        <select class="form-control shadow-sm" name="role">
                            @foreach ($roleArray as $key => $value)
                            <option value="{{ $key }}"
                                {{ $key != $user->role ?: 'selected'}}
                                >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="program_studi">Program Studi</label>
                        <select class="form-control shadow-sm" name="program_studi">
                            <option value="">-</option>
                            @foreach ($program_studi as $prodi)
                            <option value="{{ $prodi->id_prodi }}"
                                {{ $prodi->id_prodi != $user->pegawai->fk_prodi ?: 'selected'}}
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
                                {{ $jrsn->id_jurusan != $user->pegawai->fk_jurusan ?: 'selected'}}
                                >{{ $jrsn->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control shadow-sm @error('tanggal_lahir') is-invalid @enderror" value="{{ $user->pegawai->tanggal_lahir }}">
                    </div>

                    <div class="col-md-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control shadow-sm" name="jenis_kelamin">
                            @foreach ($genderArray as $key => $value)
                            <option value="{{ $key }}"
                                {{ $key != $user->pegawai->jenis_kelamin ?: 'selected' }}
                                >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="agama">Agama</label>
                        <select class="form-control shadow-sm" name="agama">
                            @foreach ($agamaArray as $agama)
                            <option value="{{ $agama }}"
                                {{ $agama != $user->pegawai->agama ?: 'selected'}}
                                >{{ $agama }}</option>
                            @endforeach
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
@endforeach
