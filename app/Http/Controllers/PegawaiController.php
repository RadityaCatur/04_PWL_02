<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data pegawai
        //$pegawai = Pegawai::all();
        //$pegawai = Pegawai::first();
        $pegawai = Pegawai::find(1);

        //mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }
}
