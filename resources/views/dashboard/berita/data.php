<?php

use Carbon\Carbon;

$heads = [
    ['label' => 'No', 'width' => 3],
    ['label' => 'Thumbnail Berita', 'width' => 10],
    ['label' => 'Judul Berita', 'width' => 8],
    ['label' => 'KOnten Berita', 'width' => 8],
    ['label' => 'Status Berita', 'width' => 8],
    ['label' => 'Opsi', 'width' => 10],
];

$query = [];
$loop = 1;

foreach ($berita as $berita) {  
        $edit_btn = '<button class="btn btn-success mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_'.$berita->id_berita.'">
                <i class="fa fa-fw fa-pen mr-2"></i> Edit
            </button>';

        $query[]=[
            $loop,
            $berita->thumbnail_berita,
            $berita->judul_berita,
            htmlspecialchars_decode($berita->konten_berita),
            $berita->status_berita,
            $edit_btn
        ];

        $loop++;
    }

$config = [
    'data' => $query,
    'columns' => [['className' => 'text-center'], null, null, null, null, ['orderable' => false]],
    'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/id.json'],
];