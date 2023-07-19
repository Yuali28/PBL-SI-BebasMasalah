<?php

use Carbon\Carbon;

$heads = [
    ['label' => 'No', 'width' => 3],
    ['label' => 'Thumbnail Berita', 'width' => 10],
    ['label' => 'Judul Berita', 'width' => 8],
    ['label' => 'Konten Berita', 'width' => 8],
    ['label' => 'Status Berita', 'width' => 8],
    ['label' => 'Opsi', 'width' => 10],
];

$query = [];
$loop = 1;

foreach ($berita as $items) {  
        $edit_btn = '<button class="btn btn-success mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_edit_berita'.$items->id_berita.'">
                        <i class="fa fa-fw fa-pen mr-2"></i> Edit
                    </button>';

        $remove_btn = '<button class="btn btn-danger mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_remove_'.$items->id_berita.'">
                            <i class="fa fa-fw fa-trash mr-2"></i> Hapus
                        </button>';
        $thumbnail = '<img src="' . asset('storage/thumbnails/' . $items->thumbnail_berita) . '" alt="" style="width: 100px">';

        $query[]=[
            $loop,
            $thumbnail,
            $items->judul_berita,
            htmlspecialchars_decode($items->konten_berita),
            $items->status_berita,
            $edit_btn.' '.$remove_btn
        ];

        $loop++;
    }

$config = [
    'data' => $query,
    'columns' => [['className' => 'text-center'], null, null, null, null, ['orderable' => false],],
    'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/id.json'],
];