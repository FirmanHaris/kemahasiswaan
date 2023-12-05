@extends('layout.template_backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card col-8">
            <div class="card-body">
                <h3>Input Berita</h3>
                <form action="{{ route('insertBerita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text" class="form-control" name="judul_berita">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori"class="form-select">
                            <option selected>Pilih Kategori...</option>
                            <option value="umum">Umum</option>
                            <option value="prestasi">Prestasi</option>
                            <option value="pelatihan">Pelatihan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Isi Berita</label>
                        <textarea name="isi_berita" id="teksedtor"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Kirim </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
