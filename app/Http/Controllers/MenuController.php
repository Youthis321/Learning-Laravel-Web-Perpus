<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('beranda');
    }
    public function daftar_buku()
    {
        return view('daftar_buku');
    }
    public function daftar_anggota_perpus()
    {
        return view('daftar_anggotaPerpus');
    }
    public function daftar_anggota_peminjam()
    {
        return view('daftar_anggotaPeminjam');
    }
    public function data_pinjam_buku()
    {
        return view('data_pinjamBuku');
    }
    public function data_buku_kembali()
    {
        return view('data_bukuKembali');
    }
    public function detail_buku_pinjam()
    {
        return view('detail_bukuPinjam');
    }
    public function review_buku()
    {
        return view('review_buku');
    }

}
