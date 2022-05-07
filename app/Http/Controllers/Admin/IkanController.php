<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ikan;
use Illuminate\Http\Request;

class IkanController extends Controller
{
    public function index()
    {
        $AllIkan = Ikan::all();
        return view('pages.admin.dashboard.main', compact('AllIkan'));
    }

    public function create()
    {
        return view('pages.admin.dashboard.input', ['data'=> new Ikan]);
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
            'name' => 'required|max:80',
            'jenis' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'harga' => 'required',
        ]);

        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile,$namafile);

        $newIkan = new Ikan;
        $newIkan->name = $request->name;
        $newIkan->jenis = $request->jenis;
        $newIkan->gambar = $namafile;
        $newIkan->jumlah = $request->jumlah;
        $newIkan->harga = $request->harga;
       

        $newIkan->save();
        return redirect('admin/dashboard')->with('status', 'Ikan berhasil di tambahkan');
    }

    public function edit(Ikan $ikan)
    {
        return view('pages.admin.dashboard.input',['data'=>$ikan]);
    }

    public function update(Request $request, Ikan $ikan)
    {
        $request->validate([
            'name' => 'required|max:80',
            'jenis' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);

        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile,$namafile);

        $ikan->name = $request->name;
        $ikan->jenis = $request->jenis;
        $ikan->gambar = $namafile;
        $ikan->jumlah = $request->jumlah;
        $ikan->harga = $request->harga;
       

        $ikan->update();
        // return redirect('admin/main')->with('status', 'Ikan berhasil di tambahkan');

        return redirect("admin/dashboard")->with('status','Ikan dengan id'.$ikan->id.' berhasil di ubah');
    }

    public function destroy(Ikan $ikan)
    {
        $ikan->delete();

        return redirect("admin/dashboard")->with('status','Ikan dengan id : '.$ikan->id." berhasil dihapus");
    }
}
