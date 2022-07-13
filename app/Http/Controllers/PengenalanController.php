<?php

namespace App\Http\Controllers;

class PengenalanController extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Bayu Prima Yuda";
        $umur = "23";
        return view('pages.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages.intro', compact('nama', 'alamat', 'umur'));
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'nama' => 'Bayu Prima Yuda', 'umur' => 15, 'mapel' => ['B.Indonesia', 'Mtk']),
            array('id' => 2, 'nama' => 'Mulki Sukmana', 'umur' => 18, 'mapel' => ['B.Inggris', 'Mtk']),
        ];
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }
}