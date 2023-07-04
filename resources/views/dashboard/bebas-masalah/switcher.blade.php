@extends('adminlte::page')

@php
    $role = 0;
    $nama = "Mike Wazowski"
@endphp

@section('title', 'Bebas Masalah')

@section('content_header')
    <h1 class="mb-1">Bebas Masalah</h1>
@stop

@section('content')
    @if ($role == 0)
        @include('dashboard.bebas-masalah.mhs')
    @elseif ($role == 1)
        @include('dashboard.bebas-masalah.kjr')
    @elseif ($role == 2)
        @include('dashboard.bebas-masalah.apd')
    @elseif ($role == 3)
        @include('dashboard.bebas-masalah.ata')
    @elseif ($role == 4)
        @include('dashboard.bebas-masalah.keu')
    @elseif ($role == 5)
        @include('dashboard.bebas-masalah.prp')
    @else
        {{-- terminate login session --}}
        {{ $request->session()->flush(); }}
    @endif
@stop

{{-- Pages --}}
    {{-- Mahasiswa --}}
        {{--
        - Dashboard.Home
        - Dashboard.Pengajuan BM (CRU bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Kajur --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (R bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Admprodi --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (R bebas-masalah)
        - Dashboard.Data Akun (CRUD user)
        - Dashboard.Profile
        --}}
    {{-- Admin TA --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (R bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Keuangan --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (R bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Perpustakaan --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (R bebas-masalah)
        - Dashboard.Profile
        --}}
