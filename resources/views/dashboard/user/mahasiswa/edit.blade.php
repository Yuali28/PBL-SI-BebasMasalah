@php
$kelasArray = ['A', 'B', 'C', 'D', 'Axioo'];
$agamaArray = ['Islam' => 'Islam', 'Buddha' => 'Buddha', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu'];
$genderArray = ['Laki-laki', 'Perempuan'];
@endphp

@foreach ($users as $user)
@if ($user->fk_mahasiswa && $user->mahasiswa->fk_prodi == auth()->user()->pegawai->fk_prodi)

<form method="POST" action="{{ route('dashboard.user.mahasiswa.put', $user->id_user) }}" autocomplete="off">
    @method('PUT')
    @csrf
    <div class="modal fade" id="modal_edit_{{ $user->id_user }}" tabindex="-1" role="dialog" aria-labelledby="modal_edit_{{ $user->id_user }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_edit_{{ $user->id_user }}Label">Edit Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body section">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="username">Username / NIM</label>
                        <input type="text" name="username" class="form-control shadow-sm @error('username') is-invalid @enderror" value="{{ $user->username }}" autocomplete="off">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control shadow-sm @error('password') is-invalid @enderror" value="">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control shadow-sm @error('nama') is-invalid @enderror" value="{{ $user->mahasiswa->nama }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control shadow-sm @error('telp') is-invalid @enderror" name="alamat" rows="2">{{ $user->mahasiswa->alamat }}</textarea>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" name="telp" class="form-control shadow-sm @error('telp') is-invalid @enderror" value="{{ $user->mahasiswa->telp }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control shadow-sm @error('email') is-invalid @enderror" value="{{ $user->email }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tahun_lulus">Tahun Lulus</label>
                        <input type="number" name="tahun_lulus" class="form-control shadow-sm @error('tahun_lulus') is-invalid @enderror" value="{{ $user->bebasMasalah->tahun_lulus }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="program_studi">Program Studi</label>
                        <select class="form-control shadow-sm" name="program_studi">
                            @foreach ($program_studi as $prodi)
                            <option value="{{ $prodi->id_prodi }}"
                                {{ $prodi->id_prodi != $user->mahasiswa->fk_prodi ?: 'selected'}}
                                >{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="kelas">Kelas</label>
                        <select class="form-control shadow-sm" name="kelas">
                            @foreach ($kelasArray as $kelas)
                            <option value="{{ $kelas }}"
                                {{ $kelas != $user->mahasiswa->kelas ?: 'selected'}}
                                >{{ $kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="angkatan">Angkatan</label>
                        <input type="number" name="angkatan" class="form-control shadow-sm @error('angkatan') is-invalid @enderror" value="{{ $user->mahasiswa->angkatan }}">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control shadow-sm @error('tanggal_lahir') is-invalid @enderror" value="{{ $user->mahasiswa->tanggal_lahir }}">
                    </div>

                    <div class="col-md-4">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control shadow-sm" name="jenis_kelamin">
                            @foreach ($genderArray as $key => $value)
                            <option value="{{ $key }}"
                                {{ $key != $user->mahasiswa->jenis_kelamin ?: 'selected'}}
                                >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="agama">Agama</label>
                        <select class="form-control shadow-sm" name="agama">
                            @foreach ($agamaArray as $agama)
                            <option value="{{ $agama }}"
                                {{ $agama != $user->mahasiswa->agama ?: 'selected'}}
                                >{{ $agama }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                </div>
                <button type="submit" class="btn btn-flat btn-success w-100 card-footer bg-success">
                    <i class="fa fa-fw fa-pen mr-2"></i> Simpan Edit
                </button>
            </div>
        </div>
    </div>
</form>

@endif
@endforeach
