@extends('layout.template_backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card col-8">
            <div class="card-body">
                <h3>Update Ormawa</h3>
                <form action="/ormawa/update/{{ $data->id_ormawa }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_ormawa">Nama Organisasi</label>
                        <input type="text" class="form-control" name="nama_ormawa" value="{{ $data->nama_ormawa }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status"class="form-select">
                            <option selected>{{ $data->status }}</option>
                            <option value="aktif">Aktif</option>
                            <option value="non aktif">Non Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ketua">Ketua</label>
                        <input type="text" class="form-control" name="ketua" value="{{ $data->ketua }}">
                    </div>
                    <div class="form-group">
                        <label for="detail_ormawa">Detail</label>
                        <textarea name="detail_ormawa" id="teksedtor">{{ $data->detail_ormawa }}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Kirim </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
