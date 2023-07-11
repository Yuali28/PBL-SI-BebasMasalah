@php
$role = 2;

$heads = [
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM/NIP', 'width' => 10],
    'Nama',
    ['label' => 'Status', 'width' => 5],
];

$query = [];
$loop = 1;

foreach ($bebasMasalah as $bm) {
    if ($bm->mahasiswa->prodi->fk_jurusan == auth()->user()->pegawai->fk_jurusan) {
        $status_ta = $bm->status_ta == 1 ? 'Bebas Masalah' : 'Bermasalah';
        $status_keuangan = $bm->status_keuangan == 1 ? 'Bebas Masalah' : 'Bermasalah';
        $status_perpus = $bm->status_perpus == 1 ? 'Bebas Masalah' : 'Bermasalah';

        $query[]=[
            $loop,
            $bm->mahasiswa->nim,
            $bm->mahasiswa->nama,
            $bm->pegawai-->,
            $bm->pegawai-->nama,
        ];

        $loop++;
    }
}