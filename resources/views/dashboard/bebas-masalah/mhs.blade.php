@extends('adminlte::page')

@php
    $nama = "Mike Wazowski";
    $nim = "C030340420";
@endphp

@section('title', 'Dashboard')

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
                    <x-adminlte-input name="nama" value="{{ $nama }}" disabled/>
                </div>
            </div>
            <div class="row">
                <div class="col">NIM</div>
                <div class="col">
                    <x-adminlte-input name="nama" value="{{ $nim }}" disabled/>
                </div>
            </div>
            <div class="row">
                <div class="col">Lembar Persetujuan</div>
                <div class="col">
                    <x-adminlte-input-file name="ifMin"/>
                </div>
            </div>
            <div class="row">
                <div class="col">Lembar Pengesahan</div>
                <div class="col">
                    <x-adminlte-input-file name="ifMin"/>
                </div>
            </div>
            <div class="row">
                <div class="col">Lembar Konsultasi 1</div>
                <div class="col">
                    <x-adminlte-input-file name="ifMin"/>
                </div>
            </div>
            <div class="row">
                <div class="col">Lembar Konsultasi 2</div>
                <div class="col">
                    <x-adminlte-input-file name="ifMin"/>
                </div>
            </div>
            <div class="row">
                <div class="col">Lembar Revisi</div>
                <div class="col">
                    <x-adminlte-input-file name="ifMin"/>
                </div>
            </div>
            <div class="row d-flex">
                <x-adminlte-button class="ml-auto mr-2" label="Simpan" theme="primary"/>
            </div>
        </x-adminlte-card>
    </div>
</div>
@stop
