{{-- @dd($bebasMasalah->mahasiswa->nama) --}}
@php
$heads = [
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM', 'width' => 10],
    'Nama',
    ['label' => 'Tahun Ajar', 'width' => 8],
    ['label' => 'BM Tugas Akhir', 'width' => 10],
    ['label' => 'BM Keuangan', 'width' => 10],
    ['label' => 'BM Perpustakaan', 'width' => 10],
];

$query = [];
$loop = 1;

foreach ($bebasMasalah as $bm) {
    if ($bm->mahasiswa->fk_prodi == auth()->user()->pegawai->fk_prodi) {
        $status_ta = $bm->status_ta == 1 ? 'Bebas Masalah' : 'Bermasalah';
        $status_keuangan = $bm->status_keuangan == 1 ? 'Bebas Masalah' : 'Bermasalah';
        $status_perpus = $bm->status_perpus == 1 ? 'Bebas Masalah' : 'Bermasalah';

        $query[]=[
            $loop,
            $bm->mahasiswa->nim,
            $bm->mahasiswa->nama,
            $bm->tahun_lulus,
            $status_ta,
            $status_keuangan,
            $status_perpus,
        ];

        $loop++;
    }
}

$config = [
    'data' => $query,
    'columns' => [null, null, null, null, null, null, null],
];
@endphp

@section('content')
{{--Tables--}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Bebas Masalah Mahasiswa Prodi {{ auth()->user()->pegawai->prodi->nama }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @method('PUT')
                            @csrf
                            <x-adminlte-datatable id="table_kajur" :heads="$heads" :config="$config"
                            bordered striped hoverable with-buttons checkbox/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
