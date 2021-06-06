<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswas (npm, nama_mahasiswa, tempat_lahir, tanggal_lahir, alamat, created_at) values (?, ?, ?, ?, ?, ?)', ['1923240027', 'Jessi', 'Palembang', '2002-02-04', 'Jl Rajawali', now()]);
        dump($result);
    }

    public function update()
    {
        $result = DB::update('update mahasiswas set nama_mahasiswa = "Ali", updated_at = now() where npm = ?', ['1923240087']);
        dump($result);
    }

    public function delete()
    {
        $result = DB::delete('delete from mahasiswas where npm =?', ['1923240087']);
        dump($result);
    }

    public function select()
    {
        $result = DB::select('select * from mahasiswas');
        //dump($result);
        return view('mahasiswa.index', ['all-mahasiswa' => $result]);
    }
}
