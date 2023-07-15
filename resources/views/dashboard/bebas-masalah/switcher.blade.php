@extends('adminlte::page')

@section('title', 'Bebas Masalah')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bebas Masalah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Bebas Masalah</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
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
