@extends('adminlte::page')

@php
    $role = 0;
    $nama = "Mike Wazowski"
@endphp

@section('title', 'Profile')

@section('content_header')
    <h1 class="mb-1">Data Diri</h1>
@stop

@section('content')
    @if ($role == 0)
        @include('dashboard.profile.mhs')
    @elseif ($role > 0 && $role < 6)
        @include('dashboard.profile.pgw')
    @else
        {{-- terminate login session --}}
        {{ $request->session()->flush() }}
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
