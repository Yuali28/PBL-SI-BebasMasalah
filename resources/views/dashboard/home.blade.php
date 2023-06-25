@extends('adminlte::page')

@php
    $role = 0;
    $nama = "Mike Wazowski"
@endphp

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="mb-1">Dashboard</h1>
@stop

@section('content')
    @if ($role == 0)
        @include('dashboard.home.mahasiswa')
    @elseif ($role == 1)
        <h6>welcome ketua jurusan</h6>
    @elseif ($role == 2)
        <h6>welcome ketua prodi</h6>
    @elseif ($role == 3)
        <h6>welcome admin TA</h6>
    @elseif ($role == 4)
        <h6>welcome staff keuangan</h6>
    @elseif ($role == 5)
        <h6>welcome staff perpustakaan</h6>
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
