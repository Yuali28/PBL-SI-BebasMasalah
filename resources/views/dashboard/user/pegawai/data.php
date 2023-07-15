<?php

use Carbon\Carbon;

$heads = [
    ['label' => 'No', 'width' => 3],
    'Nama',
    ['label' => 'NIK', 'width' => 10],
    ['label' => 'NIP', 'width' => 8],
    ['label' => 'NIDN', 'width' => 5],
    ['label' => 'No. Telp', 'width' => 8],
    'Alamat',
    ['label' => 'Tanggal Lahir', 'width' => 5],
    ['label' => 'Agama', 'width' => 5],
    ['label' => 'Jenis Kelamin', 'width' => 8],
    ['label' => 'Opsi', 'width' => 10],
];

$query = [];
$loop = 1;
foreach ($users as $user) {
        $nip = $user->pegawai->nip ?: '-';
        $nidn = $user->pegawai->nidns ?: '-';
        $tanggal_lahir = Carbon::parse($user->pegawai_tanggal_lahir)->isoFormat('D MMMM YYYY');
        $jenis_kelamin = $user->pegawai->jenis_kelamin ? 'Laki-laki' : 'Perempuan';

        $edit_btn = '<button class="btn btn-success mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_'.$user->id_user.'">
                <i class="fa fa-fw fa-pen mr-2"></i> Edit
            </button>';

        $query[]=[
            $loop,
            $user->pegawai->nama,
            $user->pegawai->nik,
            $nip,
            $nidn,
            $user->pegawai->telp,
            $user->pegawai->alamat,
            $tanggal_lahir,
            $user->pegawai->agama,
            $jenis_kelamin,
            $edit_btn
        ];

        $loop++;
}

$config = [
    'data' => $query,
    'columns' => [['className' => 'text-center'], null, null, null, null, ['orderable' => false], ['orderable' => false], null, null, null, ['orderable' => false, 'className' => 'text-center']],
    'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/id.json'],
];
