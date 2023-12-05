@extends('layout.template_backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card col-8">
            <div class="card-body">
                <h3>Input Ormawa</h3>
                <form action="{{ route('insert_ormawa') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_ormawa">Nama Organisasi</label>
                        <input type="text" class="form-control" name="nama_ormawa">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status"class="form-select">
                            <option selected>Pilih Status...</option>
                            <option value="aktif">Aktif</option>
                            <option value="non aktif">Non Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ketua">Ketua</label>
                        <input type="text" class="form-control" name="ketua">
                    </div>
                    <div class="form-group">
                        <label for="detail_ormawa">Detail</label>
                        <textarea name="detail_ormawa" id="teksedtor"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Kirim </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
