<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrmawaController extends Controller
{
    public function index()
    {
        $data = Ormawa::all();
        if (Auth::user()) {
            return view('backend.admin.ormawa.index', compact('data'));
        }
        return view('frontend.__ormawa', compact('data'));
    }
    public function showCreate()
    {
        return view('backend.admin.ormawa.add');
    }
    public function create(Request $req)
    {
        $this->validate($req, [
            'nama_ormawa' => 'required',
            'status' => 'required',
            'ketua' => 'required',
            'detail_ormawa' => 'required'
        ]);
        $data = new Ormawa();
        $data->nama_ormawa = $req->nama_ormawa;
        $data->status = $req->status;
        $data->ketua = $req->ketua;
        $data->detail_ormawa = $req->detail_ormawa;
        $data->save();
        return redirect('ormawa');
    }
    public function showUpdate($id)
    {
        $data = Ormawa::find($id);
        return view('backend.admin.ormawa.update', compact('data'));
    }
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama_ormawa' => 'required',
            'status' => 'required',
            'ketua' => 'required',
            'detail_ormawa' => 'required'
        ]);
        $data = Ormawa::find($id);
        $data->nama_ormawa = $req->nama_ormawa;
        $data->status = $req->status;
        $data->ketua = $req->ketua;
        $data->detail_ormawa = $req->detail_ormawa;
        $data->save();
        return redirect('ormawa');
    }
    public function delete($id)
    {
        $data = Ormawa::findOrFail($id);
        $data->delete();
        return redirect('ormawa');
    }
    public function detailShow($id)
    {
        $data = Ormawa::findOrFail($id);
        return view('frontend.detail_ormawa.detail', compact('data'));
    }
}
