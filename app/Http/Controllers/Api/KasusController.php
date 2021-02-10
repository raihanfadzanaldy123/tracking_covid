<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Support\Facades\Validator;

class KasusController extends Controller
{
    public function index()
    {
        $kasus = Kasus::with('rw.kelurahan.kecamatan.kota.provinsi')->get();
        return response([
            'success' => true,
            'message' => 'List Semua Kasus',
            'data' => $kasus
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_kasus' => 'required|unique:kasuses',
            'id_rw' => 'required'
        ],
            [
                'id_rw.required' => 'Masukkan Id rw!',
                'no_kasus.required' => 'Masukkan No Kasus!',
                'no_kasus.unique' => 'No Kasus Sudah Terpakai!'
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kasus = Kasus::create([
                'id_rw' => $request->input('id_rw'),
                'no_kasus' => $request->input('no_kasus')
            ]);


            if ($kasus) {
                return response()->json([
                    'success' => true,
                    'message' => 'kasus Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kasus Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $kasus = Kasus::whereId($id)->first();

        if ($kasus) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Kasus!',
                'data'    => $kasus
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kasus Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_kasus'     => 'required',
            'no_kasus'   => 'required',
            'id_rw' => 'required'
        ],
            [
                'id_rw.required' => 'Masukkan Id rw!',
                'no_kasus.required' => 'Masukkan No Kasus!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kasus = Kasus::whereId($request->input('id'))->update([
                'id_rw' => $request->input('id_rw'),
                'no_kasus' => $request->input('no_kasus'),
            ]);


            if ($kasus) {
                return response()->json([
                    'success' => true,
                    'message' => 'kasus Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kasus Gagal Diupdate!',
                ], 500);
            }

        }
    }

    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();

        if ($kasus) {
            return response()->json([
                'success' => true,
                'message' => 'kasus Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kasus Gagal Dihapus!',
            ], 500);
        }
    }
}
