<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;

class ReportController extends Controller
{
    public function global()
    {
        $positif = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh', 'kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.positif'); 
        $sembuh = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.meninggal');

        return view('report.index',compact('positif', 'sembuh', 'meninggal'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function index(){
        $url = Http::get('https://api.kawalcorona.com/')->json();
        $url1 = Http::get('https://api.kawalcorona.com/indonesia')->json();
        $url2 = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        return view('welcome', compact('url', 'url1', 'url2'));
    }
}
