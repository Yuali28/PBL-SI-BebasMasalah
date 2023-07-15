{{-- Quick Profile -- START --}}
        {{-- Profile quick info stack vertically on mobile --}}
        <div class="row">
            <div class="col-md">
                {{-- <x-adminlte-info-box title="Selamat datang," text="{{ auth()->user()->mahasiswa->nama }}" icon="fas fa-lg fa-user text-white"
                    theme="white" icon-theme="gradient-primary"/> --}}
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Selamat datang, {{ auth()->user()->pegawai->nama }}!
                </x-adminlte-card>
            </div>
            <div class="col-md">
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Role:
                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">Ketua Jurusan {{ auth()->user()->pegawai->jurusan->nama }}</span></h5>
                </x-adminlte-card>
            </div>
        </div>
        {{-- Quick Profile -- END --}}

        {{-- Small Box --}}
        <div class="row">
            <div class="col-4">
                {{-- @dd($mahasiswa->find(1)->fk_jurusan) --}}
                <x-adminlte-small-box title="{{ $mahasiswa }}" text="Mahasiswa" icon="fas fa-user-graduate text-white" theme="primary" url="{{ route('dashboard.bebas-masalah')}}" url-text="Lihat Data"/>
            </div>
            <div class="col-4">
                <x-adminlte-small-box title="{{ $bebasMasalah[1] }}" text="Bebas Masalah" icon="fas fa-check text-white" theme="success" url="{{ route('dashboard.bebas-masalah')}}" url-text="Lihat Data"/>
            </div>
            <div class="col-4">
                <x-adminlte-small-box title="{{ $bebasMasalah[0] }}" text="Bermasalah" icon="fas fa-times text-white" theme="danger" url="{{ route('dashboard.bebas-masalah')}}" url-text="Lihat Data"/>
            </div>
        </div>
        {{-- Small Box -- End --}}
