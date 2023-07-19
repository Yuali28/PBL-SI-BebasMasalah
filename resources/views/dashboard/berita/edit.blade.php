<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

{{-- @dd($berita)    --}}

    @foreach ($berita as $item)
        <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.berita.put', $item->id_berita) }}" autocomplete="off">
            @method('PUT')
            @csrf
            <div class="modal fade" id="modal_edit_berita{{ $item->id_berita }}" tabindex="-1" role="dialog" aria-labelledby="modal_edit_{{ $item->id_berita }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_edit_{{ $item->id_berita }}_label">Edit Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body section">
                    <form method="POST" action="{{ route('dashboard.berita.put', $item->id_berita) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <!-- Edit form fields go here -->
                        <div class="form-group">
                            <label for="thumbnail_berita">Thumbnail Berita</label>
                            <x-adminlte-input-file name="thumbnail_berita" placeholder="Choose a file...">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-lightblue">
                                        <i class="fas fa-upload"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input-file>
                        </div>
                        <div class="form-group">
                            <label for="judul_berita">Judul Berita</label>
                            <input type="text" name="judul_berita" class="form-control" value="{{ $item->judul_berita }}">
                        </div>
                        <div class="form-group">
                            <label for="konten_berita">Konten Berita</label>
                            <textarea id="editorEdit" name="konten_berita" class="form-control">{{ $item->konten_berita }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status_berita">Status Berita</label>
                            <select name="status_berita" class="form-control">
                                <option value="1" {{ $item->status_berita == 1 ? 'selected' : '' }}>Published</option>
                                <option value="0" {{ $item->status_berita == 0 ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berita_utama">Berita Utama</label>
                            <select name="berita_utama" class="form-control">
                                <option value="1" {{ $item->berita_utama == 1 ? 'selected' : '' }}>Ya</option>
                                <option value="0" {{ $item->berita_utama == 0 ? 'selected' : '' }}>Tidak</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-flat btn-primary w-100 card-footer bg-primary">
                            <i class="fa fa-fw fa-save mr-2"></i> Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>

    
@endforeach
    
<style>
    .ck-editor__editable {
        min-height: 10rem;
    }
</style>

<script>
    ClassicEditor
        .create( document.querySelector ( '#editorEdit' ), {
            toolbar: {
                beritas: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'blockQuote', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: false
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>


