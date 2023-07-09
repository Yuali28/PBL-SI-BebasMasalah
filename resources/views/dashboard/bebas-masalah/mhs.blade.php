@extends('adminlte::page')

@section('content_header')
    <h1 class="mb-1">Pengajuan Bebas Masalah</h1>
@stop

@section('content')
<div class="row">
    <div class="col px-md-4">
        <x-adminlte-card theme="primary" theme-mode="outline">
            <div class="row">
                <div class="col">Nama</div>
                <div class="col">
                    <x-adminlte-input name="nama" value="{{ auth()->user()->mahasiswa->nama }}" disabled/>
                </div>
            </div>
            <div class="row">
                <div class="col">NIM</div>
                <div class="col">
                    <x-adminlte-input name="nama" value="{{ auth()->user()->mahasiswa->nim }}" disabled/>
                </div>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.bebas-masalah.pengajuan', auth()->user()->bebasMasalah->id_bm) }}">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col">Lembar Persetujuan</div>
                    <div class="col">
                        <x-adminlte-input-file name="lembar_persetujuan" legend="Pilih" placeholder="{{ auth()->user()->bebasMasalah->lembar_persetujuan }}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Lembar Pengesahan</div>
                    <div class="col">
                        <x-adminlte-input-file name="lembar_pengesahan" legend="Pilih" placeholder="{{ auth()->user()->bebasMasalah->lembar_pengesahan }}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Lembar Konsultasi 1</div>
                    <div class="col">
                        <x-adminlte-input-file name="lembar_konsultasi_dospem_1" legend="Pilih" placeholder="{{ auth()->user()->bebasMasalah->lembar_konsultasi_dospem_1 }}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Lembar Konsultasi 2</div>
                    <div class="col">
                        <x-adminlte-input-file name="lembar_konsultasi_dospem_2" legend="Pilih" placeholder="{{ auth()->user()->bebasMasalah->lembar_konsultasi_dospem_2 }}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Lembar Revisi</div>
                    <div class="col">
                        <x-adminlte-input-file name="lembar_revisi" legend="Pilih" placeholder="{{ auth()->user()->bebasMasalah->lembar_revisi }}"/>
                    </div>
                </div>
                <div class="row d-flex">
                    <x-adminlte-button type="submit" class="ml-auto mr-2" label="Simpan" theme="primary"/>
                </div>
            </form>
        </x-adminlte-card>
    </div>
</div>
@stop
