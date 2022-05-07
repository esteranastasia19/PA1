<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.web.dashboard.main');
    }

    public function ibatak()
    {
        return view('pages.web.dashboard.ikanbatak');
    }
    public function ilele()
    {
        return view('pages.web.dashboard.ikanlele');
    }
    public function imas()
    {
        return view('pages.web.dashboard.ikanmas');
    }
    public function inila()
    {
        return view('pages.web.dashboard.ikannila');
    }
    public function imujahir()
    {
        return view('pages.web.dashboard.ikanmujahir');
    }
    public function sejarah()
    {
        return view('pages.web.dashboard.sejarah');
    }
    public function menu()
    {
        return view('pages.web.dashboard.menu');
    }
    // public function daftar()
    // {
    //     return view('pages.web.dashboard.daftar');
    // }
    public function daftarikan()
    {
        return view('pages.web.dashboard.daftarikan');
    }
}
