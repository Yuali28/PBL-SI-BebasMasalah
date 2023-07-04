{{-- Quick Profile -- START --}}
        {{-- Profile quick info stack vertically on mobile --}}
        <div class="row">
            <div class="col-md">
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Selamat datang, {{ $nama }}!
                </x-adminlte-card>
            </div>
            <div class="col-md">
                <x-adminlte-card theme="primary" theme-mode="outline">
                    Status:
                    <h5 class="ml-1 d-inline"><span class="badge badge-danger">Bermasalah</span></h5>
                </x-adminlte-card>
            </div>
        </div>
        {{-- Quick Profile -- END --}}
        {{-- Rincian Bebas Masalah -- START --}}
        <div class="row mt-2">
            <div class="col">
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
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah TA.</p>
                                <hr/>
                                {{-- <div class="d-flex align-content-start flex-wrap justify-content-between">
                                    <p class="d-inline mb-1">Lembar Persetujuan</p>     <span class="badge badge-primary my-1">Disetujui</span>
                                    <p class="mb-1">Lembar Pengesahan</p>               <span class="badge badge-danger my-1">Ditolak</span>
                                    <p class="mb-1">Lembar Konsultasi 1</p>             <span class="badge badge-primary my-1">Disetujui</span>
                                    <p class="mb-1">Lembar Konsultasi 2</p>             <span class="badge badge-danger my-1">Ditolak</span>
                                    <p class="mb-1">Lembar Revisi</p>                   <span class="badge badge-danger my-1">Ditolak</span>
                                </div>
                                <hr/> --}}
                                <b>Catatan:</b>
                                <p class="ml-3 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
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
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah TA.</p>
                                <hr/>
                                <b>Catatan:</b>
                                <p class="ml-3 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
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
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah TA.</p>
                                <hr/>
                                <b>Catatan:</b>
                                <p class="ml-3 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Rincian Bebas Masalah -- END --}}
