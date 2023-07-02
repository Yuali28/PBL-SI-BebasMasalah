@extends('adminlte::page')

@php
$role = 5;

// ============== Gasan datatables ==============
// ***Sebelum pakai datatables, nyalai dulu plugin datatables di file config/adminlte.php (sudah kunyalai)

// $heads gasan kepala tabel
$heads = [
    // 'label' gasan teks di kepala tabel,
    // 'width' gasan berapa persen kolomnya makan panjang tabel
    //
    // contoh di bawah artinya kalo dalam kata2:
    // "Ulah kepala tabel yg namanya 'No', tapi cuma ngambil 3% dari keseluruhan panjang tabelnya."
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM', 'width' => 15],

    // klo handak makai sepanjang panjangnya, langsung ja kek di bawah ni
    'Nama',
    ['label' => 'Jurusan', 'width' => 5],
    ['label' => 'Prodi', 'width' => 5],
    ['label' => 'Tahun Ajar', 'width' => 10],
    ['label' => 'Status', 'width' => 20],
];

$config = [
    // 'data' isinya data gasan dalam tabel
    'data' => [
        [1, 'K294750385', 'Setia Budi Pratama', 'Elektro', 'Teknik Informatika', '2020', 'Bermasalah'],
        [2, 'L058365938', 'Bulan Biru', 'Elektro', 'Teknik Informatika', '2020', 'Bebas Masalah'],
        [3, 'A918295648', 'Jaya Agung', 'Elektro', 'Teknik Informatika', '2020', 'Bebas Masalah'],
    ],
    // 'order '
    // 'order' => [[1, 'asc']],
    // ini gasan
    'columns' => [null, null, null, null, null, null, null],
];
@endphp

@section('title', 'Dashboard')

@section('content_header')
{{-- <h1>SI Bebas Masalah</h1> --}}
@stop

@section('content')
@if ($role == 5)
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bebas Masalah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Bebas Masalah</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{--Tables--}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bebas Masalah</h3>
                    </div>
                    <div class="card-body">
                        {{-- tag gasan datatables,
                            yg bordered, striped dll tu opsi gasan tabelnya, bisa dilihat di
                            https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Tool-Components#datatables (tabel pertama di halaman itu)
                        --}}
                        <x-adminlte-datatable id="table1" :heads="$heads" :config="$config"
                        bordered striped hoverable with-buttons checkbox/>
                        {{-- opsi with-buttons dipakai gasan nampilkan tombol export,,
                            tapi supaya tombol exportnya muncul harus menjalankan command:
                            php artisan adminlte:plugins install --plugin=datatables --plugin=datatablesPlugin
                        --}}
                        {{-- Note: gasan checkbox di samping setiap baris masih kucari dulu caranya. --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endif

@stop
