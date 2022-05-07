<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ikan as Restok;
use Illuminate\Http\Request;

class RestokController extends Controller
{
    public function index()
    {
        $ikans = Restok::all();
        return view('pages.admin.dashboard.restok', ['ikans' => $ikans]);
    }

    // public function create()
    // {
    //     return view('pages.admin.dashboard.inputrestok', ['data'=> new Ikan]);
    // }

    public function edit(Restok $restok)
    {
        return view('pages.admin.dashboard.inputrestok',['data'=>$restok]);
    }

    public function update(Request $request, Restok $restok)
    {
        // dd($request->all());
        $request->validate([
            'jumlah' => 'required',
        ]);
        $restok->jumlah = $restok->jumlah + $request->jumlah;
       

        $restok->update();
        // return redirect('admin/main')->with('status', 'Ikan berhasil di tambahkan');

        return redirect("admin/restok")->with('status','Ikan dengan id'.$restok->id.' berhasil di ubah');
    }

    public function destroy(Restok $restok)
    {
        $restok->delete();

        return redirect("admin/dashboard")->with('status','Ikan dengan id : '.$restok->id." berhasil dihapus");
    }
}
