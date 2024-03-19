<?php

namespace App\Http\Controllers;

use App\Models\Tabel;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    public function tabel() 
    {
        $data = Tabel::all();
        return view('tabel', compact('data'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function insert(Request $request)
    {
        $data = Tabel::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototabel/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('tabel')->with('success', 'Foto Berhasil ditambahkan Saudaraa!');
    }

    public function edit($id)
    {
        $data = Tabel::find($id);
        return view('edit', compact('data'));
    }

    public function ubah(Request $request, $id)
    {
        $data = Tabel::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fototabel/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('tabel')->with('success', 'Foto Berhasil diupdate Saudaraa!');
    }

    public function hapus($id)
    {
        $data = Tabel::find($id);
        $data->delete();

        return redirect()->route('tabel')->with('success', 'Foto Berhasil dihapus Saudaraa!');
    }
}
