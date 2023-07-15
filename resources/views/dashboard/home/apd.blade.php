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
                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">{{ auth()->user()->pegawai->nama }}</span></h5>
                </x-adminlte-card>
            </div>
        </div>
        {{-- Quick Profile -- END --}}

        {{-- Small Box --}}
        <div class="row">
            <div class="col-4">
                <x-adminlte-small-box title="{{ $user }}" text="Total User" icon="fas fa-users text-white" theme="primary" url="#" url-text="Total Pegawai + Mahasiswa"/>
            </div>
            <div class="col-4">
                <x-adminlte-small-box title="{{ $mahasiswa }}" text="Mahasiswa" icon="fas fa-user-graduate text-white" theme="success" url="{{ route('dashboard.user.mahasiswa')}}" url-text="Lihat Data"/>
            </div>
            <div class="col-4">
                <x-adminlte-small-box title="{{ $pegawai }}" text="Pegawai" icon="fas fa-user-tie text-white" theme="danger" url="{{ route('dashboard.user.pegawai')}}" url-text="Lihat Data"/>
            </div>
        </div>
        {{-- Small Box -- End --}}
