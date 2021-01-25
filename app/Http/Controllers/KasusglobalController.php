<?php

namespace App\Http\Controllers;

use App\Models\Kasusglobal;
use App\Models\Negara;
use Illuminate\Http\Request;

class KasusglobalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kasusglobal = Kasusglobal::with('negara')->get();
        return view('kasusglobal.index',compact('kasusglobal'));
    }

    public function create()
    {
        $negara = Negara::all();
        return view('kasusglobal.create',compact('negara'));
    }

    public function store(Request $request)
    {
        $kasusglobal = new Kasusglobal();
        $kasusglobal->positif = $request->positif;
        $kasusglobal->sembuh = $request->sembuh;
        $kasusglobal->meninggal = $request->meninggal;
        $kasusglobal->tanggal = $request->tanggal;
        $kasusglobal->id_negara = $request->id_negara;
        $kasusglobal->save();
        return redirect()->route('kasusglobal.index')->with('toast_success', 'Kasus berhasil dibuat!');
    }

    public function show($id)
    {
        $kasusglobal = Kasusglobal::findOrFail($id);
        return view('kasusglobal.show',compact('kasusglobal'));
    }

    public function edit($id)
    {
        $kasusglobal = Kasusglobal::findOrFail($id);
        $negara = Negara::all();
        return view('kasusglobal.edit',compact('kasusglobal','negara'));
    }

    public function update(Request $request, $id)
    {
        $kasusglobal = Kasusglobal::findOrFail($id);
        $kasusglobal->positif = $request->positif;
        $kasusglobal->sembuh = $request->sembuh;
        $kasusglobal->meninggal = $request->meninggal;
        $kasusglobal->tanggal = $request->tanggal;
        $kasusglobal->id_negara = $request->id_negara;
        $kasusglobal->save();
        return redirect()->route('kasusglobal.index')->with('toast_success', 'Kasus berhasil diedit!');
    }

    public function destroy($id)
    {
        $kasusglobal = Kasusglobal::findOrFail($id)->delete();
        return redirect()->route('kasusglobal.index')->with('success', 'Kasus berhasil dihapus!');
    }
}
