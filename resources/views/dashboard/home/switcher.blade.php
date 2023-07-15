@extends('adminlte::page')
@section('content_header')

@section('title', 'Dashboard')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
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
        - Dashboard.Data BM (RW bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Keuangan --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (RW bebas-masalah)
        - Dashboard.Profile
        --}}
    {{-- Perpustakaan --}}
        {{--
        - Dashboard.Home
        - Dashboard.Data BM (RW bebas-masalah)
        - Dashboard.Profile
        --}}
