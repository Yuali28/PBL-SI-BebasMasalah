@extends('adminlte::page')

@php
    $role = 1;
@endphp

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>SI Bebas Masalah</h1> --}}
@stop

@section('content')
    @if ($role == 0)
        {{-- Quick Profile -- START --}}
        <div class="row pt-4">
            <div class="col-md">
                <x-adminlte-profile-widget name="Sullivan Wazowski" desc="C030340420"
                    img="https://i.imgflip.com/3adpwk.png"
                    layout-type="classic" header-class="text-right" footer-class="">
                    <x-adminlte-profile-col-item class="border-right text-dark"
                        title="Program Studi" text="Teknik Informatika" size=3/>
                    <x-adminlte-profile-col-item class="border-right text-dark"
                        title="Bebas Masalah TA" text="Tidak" size=3 badge="danger"/>
                    <x-adminlte-profile-col-item class="border-right text-dark"
                        title="Bebas Masalah Perpustakaan" text="Ya" size=3 badge="blue"/>
                    <x-adminlte-profile-col-item class="text-dark"
                        title="Bebas Masalah Keuangan" text="Ya" size=3 badge="blue"/>
                </x-adminlte-profile-widget>
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
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-light">
                                <p>Ini merupakan bagian untuk deskripsi dari bebas masalah TA.</p>
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Lembar Persetujuan</h5>
                                            <div class="card-body">
                                                <h5 class="mb-3"><span class="badge badge-primary">Disetujui</span></h5>
                                                <p class="card-text">Ini merupakan deskripsi dari lembar persetujuan.</p>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary font-weight-bold flex-fill mr-1"><i class="fas fa-upload mr-2"></i> Upload</a>
                                                    <a href="#" class="btn btn-info font-weight-bold flex-fill ml-1"><i class="fas fa-eye mr-2"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Lembar Pengesahan</h5>
                                            <div class="card-body">
                                                <h5 class="mb-3"><span class="badge badge-danger">Ditolak</span></h5>
                                                <p class="card-text">Ini merupakan deskripsi dari lembar pengesahan.</p>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary font-weight-bold flex-fill mr-1"><i class="fas fa-upload mr-2"></i> Upload</a>
                                                    <a href="#" class="btn btn-info font-weight-bold flex-fill ml-1"><i class="fas fa-eye mr-2"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Lembar Konsultasi 1</h5>
                                            <div class="card-body">
                                                <h5 class="mb-3"><span class="badge badge-primary">Disetujui</span></h5>
                                                <p class="card-text">Ini merupakan deskripsi dari lembar konsultasi 1.</p>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary font-weight-bold flex-fill mr-1"><i class="fas fa-upload mr-2"></i> Upload</a>
                                                    <a href="#" class="btn btn-info font-weight-bold flex-fill ml-1"><i class="fas fa-eye mr-2"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Lembar Konsultasi 2</h5>
                                            <div class="card-body">
                                                <h5 class="mb-3"><span class="badge badge-danger">Ditolak</span></h5>
                                                <p class="card-text">Ini merupakan deskripsi dari lembar konsultasi 2.</p>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary font-weight-bold flex-fill mr-1"><i class="fas fa-upload mr-2"></i> Upload</a>
                                                    <a href="#" class="btn btn-info font-weight-bold flex-fill ml-1"><i class="fas fa-eye mr-2"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <h5 class="card-header">Lembar Revisi</h5>
                                            <div class="card-body">
                                                <h5 class="mb-3"><span class="badge badge-danger">Ditolak</span></h5>
                                                <p class="card-text">Ini merupakan deskripsi dari lembar konsultasi Revisi.</p>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary font-weight-bold flex-fill mr-1"><i class="fas fa-upload mr-2"></i> Upload</a>
                                                    <a href="#" class="btn btn-info font-weight-bold flex-fill ml-1"><i class="fas fa-eye mr-2"></i> Lihat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b>Catatan:</b>
                                <p class="ml-3">Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.</p>
                                <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-dark text-left collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Rincian Bebas Masalah Perpustakaan
                                <i class="pt-1 fas fa-chevron-down"></i>
                            </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body bg-light">
                            <p>Ini merupakan bagian untuk deskripsi dari bebas masalah perpustakaan.</p>
                            <b>Catatan:</b>
                            <p class="ml-3">Some placeholder content for the second accordion panel. This panel is hidden by default.</p>
                            <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-dark text-left collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Rincian Bebas Masalah Keuangan
                                <i class="pt-1 fas fa-chevron-down"></i>
                            </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body bg-light">
                            <p>Ini merupakan bagian untuk deskripsi dari bebas masalah Keuangan.</p>
                            <b>Catatan:</b>
                            <p class="ml-3">And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.</p>
                            <i class="font-weight-light">Diperbarui pada 20 Januari 2043</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Rincian Bebas Masalah -- END --}}
        {{-- Berita -- START --}}
        <div class="row px-1">
            <div class="accordion mt-4" id="accordionNews">
                <div class="card">
                    <div class="card-header bg-primary" id="headingBerita">
                        <h2 class="mb-0">
                        <button class="btn btn-block text-left text-light font-weight-bold d-flex" type="button" data-toggle="collapse" data-target="#collapseBerita" aria-expanded="true" aria-controls="collapseBerita">
                            <i class="pt-2 mr-3 fas fa-comment"></i>
                            <span style="font-size: 1.2rem;">
                                Berita dan Pemberitahuan
                            </span>
                            <i class="pt-2 ml-auto fas fa-chevron-down"></i>
                        </button>
                        </h2>
                    </div>
                    <div id="collapseBerita" class="collapse show bg-light" aria-labelledby="headingBerita" data-parent="#accordionNews">
                        <div class="row my-4 mx-3 row-cols-1 row-cols-md-3">
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Berita -- END --}}
    @elseif ($role == 1)
    {{-- Quick Profile -- START --}}
        <div class="row pt-4">
            <div class="col-md">
                <x-adminlte-profile-widget name="Subandi" desc="Panitia TA"
                    img="https://i.imgflip.com/3adpwk.png"
                    layout-type="classic" header-class="text-right" footer-class="">
                    <x-adminlte-profile-col-item class="border-right text-dark"
                        title="Program Studi" text="Teknik Informatika" size=3/>
                </x-adminlte-profile-widget>
            </div>
        </div>
        {{-- Quick Profile -- END --}}

        {{-- Berita -- START --}}
        <div class="row px-1">
            <div class="accordion mt-4" id="accordionNews">
                <div class="card">
                    <div class="card-header bg-primary" id="headingBerita">
                        <h2 class="mb-0">
                        <button class="btn btn-block text-left text-light font-weight-bold d-flex" type="button" data-toggle="collapse" data-target="#collapseBerita" aria-expanded="true" aria-controls="collapseBerita">
                            <i class="pt-2 mr-3 fas fa-comment"></i>
                            <span style="font-size: 1.2rem;">
                                Berita dan Pemberitahuan
                            </span>
                            <i class="pt-2 ml-auto fas fa-chevron-down"></i>
                        </button>
                        </h2>
                    </div>
                    <div id="collapseBerita" class="collapse show bg-light" aria-labelledby="headingBerita" data-parent="#accordionNews">
                        <div class="row my-4 mx-3 row-cols-1 row-cols-md-3">
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-4">
                                <a href="#">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1685431965348-34ede108ef68?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1010&q=80" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <span class="card-title text-link mb-3 text-dark text-capitalize font-weight-bold" href="#" style="font-size: 1.2rem">Ini merupakan judul berita atau pemberitahuan</span>
                                        <p class="card-text text-justify text-dark" style="height: 8rem">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Berita -- END --}}
    @endif
@stop
