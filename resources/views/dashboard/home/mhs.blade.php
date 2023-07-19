{{-- Quick Profile -- START --}}
        {{-- Profile quick info stack vertically on mobile --}}
        <div class="row">
            <div class="col-md-8">
                {{-- <x-adminlte-info-box title="Selamat datang," text="{{ auth()->user()->mahasiswa->nama }}" icon="fas fa-lg fa-user text-white"
                    theme="white" icon-theme="gradient-primary"/> --}}
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Selamat datang, {{ auth()->user()->mahasiswa->nama }}!
                </x-adminlte-card>
            </div>
            <div class="col-md-4">
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Status:
                    @if (auth()->user()->bebasMasalah->status_ta && auth()->user()->bebasMasalah->status_keuangan && auth()->user()->bebasMasalah->status_perpus)
                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">Bebas Masalah</span></h5>
                    @else
                    <h5 class="ml-1 d-inline"><span class="badge badge-danger">Bermasalah</span></h5>
                    @endif
                </x-adminlte-card>
            </div>
        </div>
        {{-- Quick Profile -- END --}}

        {{-- Cetak SIBM --}}
        <a href="{{ route('mahasiswa.cetakpdf') }}">
        <button type="button" class="btn btn-primary w-100 h-100 mb-2"><i class="fas fa-print mr-2"></i>Cetak Surat Bebas Masalah</button>
        </a>
        {{-- Cetak SIBM -- END --}}

        {{-- Rincian Bebas Masalah -- START --}}
        <div class="row mt-2">
            <div class="col mb-4">
                <div class="accordion" id="accordionExample">
                    <div class="card mb-0">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-dark text-left d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Rincian Bebas Masalah TA
                                <i class="pt-1 fas fa-chevron-down"></i>
                            </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-light">
                                <p class="text-justify">Untuk memenuhi bebas masalah TA, lembar-lembar persetujuan, pengesahan, konsultasi 1, konsultasi 2, dan revisi harus dikumpulkan dan disetujui oleh Admin TA.</p>
                                <hr/>
                                <div class="d-flex">
                                    <b class="mr-auto">Catatan:</b>
                                    @if (auth()->user()->bebasMasalah->status_ta)
                                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">Bebas Masalah</span></h5>
                                    @else
                                    <h5 class="ml-1 d-inline"><span class="badge badge-danger">Bermasalah</span></h5>
                                    @endif
                                </div>
                                <p class="ml-3 text-justify">{{ auth()->user()->bebasMasalah->note_ta }}</p>
                                <i class="font-weight-light">Diperbarui pada {{ Carbon\Carbon::parse(auth()->user()->bebasMasalah->update_note_ta)->isoFormat('dddd, D MMMM YYYY') }}.</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="accordion" id="accordionKeu">
                    <div class="card mb-0">
                        <div class="card-header" id="headingKeu">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-dark text-left d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseKeu" aria-expanded="false" aria-controls="collapseKeu">
                                Rincian Bebas Masalah Keuangan
                                <i class="pt-1 fas fa-chevron-down"></i>
                            </button>
                            </h2>
                        </div>
                        <div id="collapseKeu" class="collapse show" aria-labelledby="headingKeu" data-parent="#accordionKeu">
                            <div class="card-body bg-light">
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah keuangan.</p>
                                <hr/>
                                <div class="d-flex">
                                    <b class="mr-auto">Catatan:</b>
                                    @if (auth()->user()->bebasMasalah->status_keuangan)
                                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">Bebas Masalah</span></h5>
                                    @else
                                    <h5 class="ml-1 d-inline"><span class="badge badge-danger">Bermasalah</span></h5>
                                    @endif
                                </div>
                                <p class="ml-3 text-justify">{{ auth()->user()->bebasMasalah->note_keuangan }}</p>
                                <i class="font-weight-light">Diperbarui pada {{ Carbon\Carbon::parse(auth()->user()->bebasMasalah->update_note_keuangan)->isoFormat('dddd, D MMMM YYYY') }}.</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="accordion" id="accordionPerpus">
                    <div class="card mb-0">
                        <div class="card-header" id="headingPerpus"
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-dark text-left d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapsePerpus" aria-expanded="false" aria-controls="collapsePerpus">
                                Rincian Bebas Masalah Perpustakaan
                                <i class="pt-1 fas fa-chevron-down"></i>
                            </button>
                            </h2>
                        </div>
                        <div id="collapsePerpus" class="collapse show" aria-labelledby="headingPerpus" data-parent="#accordionPerpus">
                            <div class="card-body bg-light">
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah perpustakaan.</p>
                                <hr/>
                                <div class="d-flex">
                                    <b class="mr-auto">Catatan:</b>
                                    @if (auth()->user()->bebasMasalah->status_perpus)
                                    <h5 class="ml-1 d-inline"><span class="badge badge-primary">Bebas Masalah</span></h5>
                                    @else
                                    <h5 class="ml-1 d-inline"><span class="badge badge-danger">Bermasalah</span></h5>
                                    @endif
                                </div>
                                <p class="ml-3 text-justify">{{ auth()->user()->bebasMasalah->note_perpus }}</p>
                                <i class="font-weight-light">Diperbarui pada {{ Carbon\Carbon::parse(auth()->user()->bebasMasalah->update_note_perpus)->isoFormat('dddd, D MMMM YYYY') }}.</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Rincian Bebas Masalah -- END --}}

