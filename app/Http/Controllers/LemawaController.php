<?php

namespace App\Http\Controllers;

use App\Models\Lemawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LemawaController extends Controller
{
    public function index()
    {
        $data = Lemawa::all();
        if (Auth::user()) {
            return view('backend.admin.lemawa.index', compact('data'));
        }
        return view('frontend.__lemawa', compact('data'));
    }
    public function showCreate()
    {
        return view('backend.admin.lemawa.add');
    }
    public function create(Request $req)
    {
        $this->validate($req, [
            'nama_lemawa' => "required",
            'status' => 'required',
            'ketua' => 'required',
            'detail_lemawa' => 'required'
        ]);
        $data = new Lemawa();
        $data->nama_lemawa = $req->nama_lemawa;
        $data->status = $req->status;
        $data->ketua = $req->ketua;
        $data->detail_lemawa = $req->detail_lemawa;
        $data->save();
        return redirect('lemawa');
    }
    public function showUpdate($id)
    {
        $lemawa = Lemawa::find($id);
    }
}
