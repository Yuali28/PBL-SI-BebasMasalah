@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="mb-1">Dashboard</h1>
@stop

@section('content')
    @if ($role == 0)
        @include('dashboard.home.mhs')
    @elseif ($role == 1)
        @include('dashboard.home.kjr')
    @elseif ($role == 2)
        @include('dashboard.home.apd')
    @elseif ($role == 3)
        @include('dashboard.home.ata')
    @elseif ($role == 4)
        @include('dashboard.home.keu')
    @elseif ($role == 5)
        @include('dashboard.home.prp')
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
