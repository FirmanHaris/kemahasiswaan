@extends('layout.template_backend.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('formadd_ormawa') }}" class="btn btn-primary"><i class="mdi mdi-plus-thick"></i></a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Organisasi</th>
                            <th>Status</th>
                            <th>Ketua</th>
                            <th>Detail</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    @foreach ($data as $ormawa)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ormawa->nama_ormawa }}</td>
                                <td>{{ $ormawa->status }}</td>
                                <td>{{ $ormawa->ketua }}</td>
                                <td>{{ $ormawa->detail_ormawa }}</td>
                                <td>
                                    <a href="/ormawa/update/{{ $ormawa->id_ormawa }}" class="btn btn-sm btn-warning"><i
                                            class="mdi mdi-pencil" title="update"></i></a>
                                    <form action="/ormawa/delete/{{ $ormawa->id_ormawa }}" method="post" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data Ormawa ? ')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger"><i class="mdi mdi-delete"
                                                title="delete"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
