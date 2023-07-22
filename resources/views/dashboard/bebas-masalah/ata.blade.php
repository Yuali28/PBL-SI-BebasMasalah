{{-- @dd($bebasMasalah) --}}
@php
$role = 3;

$heads = [
    ['label' => 'SBM', 'width' => 3, 'no-export' => true],
    ['label' => 'No', 'width' => 3],
    ['label' => 'NIM', 'width' => 10],
    'Nama',
    ['label' => 'Program Studi', 'width' => 10],
    ['label' => 'Tahun Kelulusan', 'width' => 8],
    ['label' => 'Status Tugas Akhir', 'width' => 10],
    ['label' => 'Keterangan', 'width' => 20],
    ['label' => 'Opsi', 'width' => 10, 'no-export' => true],
];

$query = [];
$loop = 1;

foreach ($bebasMasalah as $bm) {
     if ($bm->mahasiswa->prodi->fk_jurusan == auth()->user()->pegawai->fk_jurusan) {
        $status_ta = $bm->status_ta == 1 ? 'Bebas Masalah' : 'Bermasalah';

        $edit_btn = '<button class="btn btn-success mx-1 shadow-sm edit-btn mb-2" data-toggle="modal" data-target="#modal_'.$bm->id_bm.'">
                <i class="fa fa-fw fa-pen mr-2"></i> Edit
            </button>';

        $see_btn = '<button class="btn btn-info mx-1 shadow-sm edit-btn" data-toggle="modal" data-target="#modal_see_'. $bm->id_bm . '">
            <i class="fa fa-fw fa-eye mr-2"></i> Lihat
        </button>';

        $chk_btn = '<input type="checkbox" class="my-auto" style="width: 1.5rem; height: 1.5rem;" name="status_ta_' . $bm->id_bm . '">';

        $query[]=[
            $chk_btn,
            $loop,
            $bm->mahasiswa->nim,
            $bm->mahasiswa->nama,
            $bm->mahasiswa->prodi->nama,
            $bm->tahun_lulus,
            $status_ta,
            $bm->note_ta,
            $edit_btn . $see_btn
        ];

        $loop++;
    }
}

$config = [
    'data' => $query,
    'columns' => [['orderable' => false, 'className' => 'text-center'], ['className' => 'text-center'], null, null, null, null, null, null, ['orderable' => false, 'className' => 'text-center']],
    'checkbox' => true,
    'columnDefs' => [
        ['targets' => 0, 'checkboxes' => true],
    ],
    'order' => [[1, 'asc']],
    'language' => ['url' => 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/id.json'],
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
                        <h3 class="card-title">Data BM Jurusan {{ auth()->user()->pegawai->jurusan->nama }}</h3>
                    </div>
                    <form method="POST" action="{{ route('dashboard.bebas-masalah.persetujuan') }}">
                    <div class="card-body">
                            @method('PUT')
                            @csrf
                            <x-adminlte-datatable id="table_kajur" :heads="$heads" :config="$config" bordered striped hoverable with-buttons
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
    @if ($bm->mahasiswa->prodi->fk_jurusan == auth()->user()->pegawai->fk_jurusan)
        <form method="POST" action="{{ route('dashboard.bebas-masalah.catatan', $bm->id_bm) }}">
            @method('PUT')
            @csrf
            <div class="modal fade" id="modal_{{ $bm->id_bm }}" tabindex="-1" role="dialog" aria-labelledby="modal_{{ $bm->id_bm }}Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_{{ $bm->id_bm }}Label">Keterangan BM Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <textarea class="rounded-0 border-right-0 border-left-0 p-2" name="note_ta" id="catatan" rows="8" maxlength="100">Masukkan keterangan...</textarea>
                        <button type="submit" class="btn btn-flat btn-primary w-100 card-footer bg-primary">
                            <i class="fa fa-fw fa-save mr-2"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade" id="modal_see_{{ $bm->id_bm }}" tabindex="-1" role="dialog" aria-labelledby="modal_see_{{ $bm->id_bm }}Label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_see_{{ $bm->id_bm }}Label">Lembar-lembar Tugas Akhir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-2">
                            <div class="col">
                                <b>Lembar Persetujuan</b>
                            </div>
                            <div class="col">
                                @if($bm->lembar_persetujuan)
                                <a href="{{ asset('storage/Lembar BM/'.$bm->tahun_lulus.'/'.$bm->mahasiswa->nim.'/'.$bm->lembar_persetujuan) }}" target="_blank">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye mr-2"></i>Lihat</button>
                                </a>
                                @else
                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban mr-2"></i>Belum ada</button>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <b>Lembar Pengesahan</b>
                            </div>
                            <div class="col">
                                @if($bm->lembar_pengesahan)
                                <a href="{{ asset('storage/Lembar BM/'.$bm->tahun_lulus.'/'.$bm->mahasiswa->nim.'/'.$bm->lembar_pengesahan) }}" target="_blank">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye mr-2"></i>Lihat</button>
                                </a>
                                @else
                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban mr-2"></i>Belum ada</button>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <b>Lembar Konsultasi 1</b>
                            </div>
                            <div class="col">
                                @if($bm->lembar_konsultasi_dospem_1)
                                <a href="{{ asset('storage/Lembar BM/'.$bm->tahun_lulus.'/'.$bm->mahasiswa->nim.'/'.$bm->lembar_konsultasi_dospem_1) }}" target="_blank">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye mr-2"></i>Lihat</button>
                                </a>
                                @else
                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban mr-2"></i>Belum ada</button>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <b>Lembar Konsultasi 2</b>
                            </div>
                            <div class="col">
                                @if($bm->lembar_konsultasi_dospem_2)
                                <a href="{{ asset('storage/Lembar BM/'.$bm->tahun_lulus.'/'.$bm->mahasiswa->nim.'/'.$bm->lembar_konsultasi_dospem_2) }}" target="_blank">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye mr-2"></i>Lihat</button>
                                </a>
                                @else
                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban mr-2"></i>Belum ada</button>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col">
                                <b>Lembar Revisi</b>
                            </div>
                            <div class="col">
                                @if($bm->lembar_revisi)
                                <a href="{{ asset('storage/Lembar BM/'.$bm->tahun_lulus.'/'.$bm->mahasiswa->nim.'/'.$bm->lembar_revisi) }}" target="_blank">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye mr-2"></i>Lihat</button>
                                </a>
                                @else
                                <button class="btn btn-sm btn-danger"><i class="fas fa-ban mr-2"></i>Belum ada</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

@endif

@stop
{{--
@section('css')
<style>
.modal {
    z-index: 1050; /* Adjust this value if needed */
}
</style>
@endsection --}}

@section('js')
    <script>
        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
        });
    </script>
@stop
