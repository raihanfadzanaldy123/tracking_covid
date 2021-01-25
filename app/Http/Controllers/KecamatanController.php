<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kecamatan = Kecamatan::with('kota')->get();
        return view('kecamatan.index',compact('kecamatan'));
    }

    public function create()
    {
        $kota = Kota::all();
        return view('kecamatan.create',compact('kota'));
    }

    public function store(Request $request)
    {
        $kecamatan = new Kecamatan();
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with('toast_success', 'Kecamatan berhasil dibuat!');
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.show',compact('kecamatan'));
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kota = Kota::all();
        return view('kecamatan.edit',compact('kecamatan','kota'));
    }

    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with('toast_success', 'Kecamatan berhasil diedit!');
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan berhasil dihapus!');
    }
}
