{{-- @dd($bebasMasalah->mahasiswa->nama) --}}
@php
$role = 3;

$heads = [
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM', 'width' => 10],
    'Nama',
    ['label' => 'Jurusan', 'width' => 10],
    ['label' => 'Program Studi', 'width' => 10],
    ['label' => 'Tahun Ajar', 'width' => 8],
    ['label' => 'Status', 'width' => 10],
    ['label' => 'Keterangan', 'width' => 20],
];

$query = [];
$loop = 1;

foreach ($bebasMasalah as $bm) {
    //  if ($bm->mahasiswa->prodi->fk_jurusan == auth()->user()->pegawai->fk_jurusan) {
        $status_ta = $bm->status_ta == 1 ? 'Bebas Masalah' : 'Bermasalah';

        $query[]=[
            $loop,
            $bm->mahasiswa->nim,
            $bm->mahasiswa->nama,
            $bm->mahasiswa->prodi->jurusan->nama,
            $bm->mahasiswa->prodi->nama,
            $bm->tahun_lulus,
            $status_ta,
            $bm->note_ta,
        ];

        $loop++;
    // }
}

$config = [
    'data' => $query,
    'columns' => [null, null, null, null, null, null, null, null],
];
@endphp

@section('content')
@if ($role == 3)
{{--Tables--}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Data Bebas Masalah Mahasiswa {{ auth()->user()->pegawai->jurusan->nama }}</h3> --}}
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

@endif

@stop
