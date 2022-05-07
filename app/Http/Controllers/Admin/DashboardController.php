<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $AllIkan = Ikan::all();
        return view('pages.admin.dashboard.main', compact('AllIkan'));
    }
    public function tambah()
    {
        return view('pages.admin.dashboard.input');
    }
    public function restok()
    {
        return view('pages.admin.dashboard.restok');
    }



}
