{{-- @dd($bebasMasalah->mahasiswa->nama) --}}
@php
$role = 5;

$heads = [
    ['label' => 'SBM', 'width' => 3, 'no-export' => true],
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM', 'width' => 10],
    'Nama',
    ['label' => 'Program Studi', 'width' => 10],
    ['label' => 'Tahun Kelulusan', 'width' => 8],
    ['label' => 'Status Perpustakaan', 'width' => 10],
    ['label' => 'Keterangan', 'width' => 20],
    ['label' => 'Opsi', 'width' => 9, 'no-export' => true],
];

$query = [];
$loop = 1;

foreach ($bebasMasalah as $bm) {
    //  if ($bm->mahasiswa->prodi->fk_jurusan == auth()->user()->pegawai->fk_jurusan) {
        $status_perpus = $bm->status_perpus == 1 ? 'Bebas Masalah' : 'Bermasalah';

        $edit_btn = '<button class="btn btn-success mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_'.$bm->id_bm.'">
                <i class="fa fa-fw fa-pen mr-2"></i> Edit
            </button>';

        $chk_btn = '<input type="checkbox" class="my-auto" style="width: 1.5rem; height: 1.5rem;" name="status_perpus_' . $bm->id_bm . '">';

        $query[]=[
            $chk_btn,
            $loop,
            $bm->mahasiswa->nim,
            $bm->mahasiswa->nama,
            $bm->mahasiswa->prodi->nama,
            $bm->tahun_lulus,
            $status_perpus,
            $bm->note_perpus,
            $edit_btn
        ];

        $loop++;
    // }
}

$config = [
    'data' => $query,
    'columns' => [['orderable' => false, 'className' => 'text-center'], ['className' => 'text-center'], null, null, null, null, null, null,  ['orderable' => false, 'className' => 'text-center']],
    'checkbox' => true,
    'columnDefs' => [
        ['targets' => 0, 'checkboxes' => true],
    ],
    'order' => [[1, 'asc']],
    'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/id.json'],
];
@endphp

@section('content')
@if ($role == 5)
{{--Tables--}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{-- <h3 class="card-title">Data Bebas Masalah Mahasiswa {{ auth()->user()->pegawai->jurusan->nama }}</h3> --}}
                    </div>
                    <form method="POST" action="{{ route('dashboard.bebas-masalah.persetujuan') }}">
                    <div class="card-body">
                            @method('PUT')
                            @csrf
                            <x-adminlte-datatable id="table_perpus" :heads="$heads" :config="$config" bordered striped hoverable with-buttons
                            checkbox/>
                        </div>
                        <button type="submit" class="btn btn-flat btn-success w-100 card-footer bg-success">
                            {{-- <a href=""><button class="btn btn-success ml-auto mt-2 mx-1 shadow-sm font-weight-bold" title="Edit"> --}}
                                <i class="fa fa-fw fa-check mr-2"></i> Ubah Status BM
                            {{-- </button></a> --}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Modals --}}
@foreach ($bebasMasalah as $bm)
        @php
            $modalId = 'modal_' . $bm->id_bm;
        @endphp
        <form method="POST" action="{{ route('dashboard.bebas-masalah.catatan', $bm->id_bm) }}">
            @method('PUT')
            @csrf
            <div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="{{ $modalId }}Label">Keterangan BM Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <textarea class="rounded-0 border-right-0 border-left-0" name="note_perpus" id="catatan" rows="8" maxlength="100"></textarea>
                        <button type="submit" class="btn btn-flat btn-primary w-100 card-footer bg-primary">
                            <i class="fa fa-fw fa-save mr-2"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
@endforeach

@endif

@stop

@section('js')
    <script>
        // Prevent form submission when clicking on the edit button
        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
        });
    </script>
</section>
@stop
