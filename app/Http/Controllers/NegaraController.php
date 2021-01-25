<?php

namespace App\Http\Controllers;

use App\Models\Negara;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $negara = Negara::all();
        return view('negara.index',compact('negara'));
    }

    public function create()
    {
        return view('negara.create');
    }

    public function store(Request $request)
    {
        $negara = new Negara();
        $negara->kode_negara = $request->kode_negara;
        $negara->nama_negara = $request->nama_negara;
        $negara->save();
        return redirect()->route('negara.index')->with('toast_success', 'Negara berhasil dibuat!');
    }

    public function show($id)
    {
        $negara = Negara::findOrFail($id);
        return view('negara.show',compact('negara'));
    }

    public function edit($id)
    {
        $negara = Negara::findOrFail($id);
        return view('negara.edit',compact('negara'));
    }

    public function update(Request $request, $id)
    {
        $negara = Negara::findOrFail($id);
        $negara->kode_negara = $request->kode_negara;
        $negara->nama_negara = $request->nama_negara;
        $negara->save();
        return redirect()->route('negara.index')->with('toast_success', 'Negara berhasil diedit!');
    }

    public function destroy($id)
    {
        $negara = Negara::findOrFail($id)->delete();
        return redirect()->route('negara.index')->with('success', 'Negara berhasil dihapus!');
    }
}
