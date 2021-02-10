<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Kelurahan',
            'data' => $kelurahan
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kelurahan' => 'required|unique:kelurahans',
            'id_kecamatan' => 'required'
        ],
            [
                'id_kecamatan.required' => 'Masukkan Id Kecamatan!',
                'nama_kelurahan.required' => 'Masukkan Nama Kelurahan!',
                'nama_kelurahan.unique' => 'Nama Kelurahan Sudah Terpakai!'
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kelurahan = Kelurahan::create([
                'id_kecamatan' => $request->input('id_kecamatan'),
                'nama_kelurahan' => $request->input('nama_kelurahan')
            ]);


            if ($kelurahan) {
                return response()->json([
                    'success' => true,
                    'message' => 'kelurahan Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kelurahan Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::whereId($id)->first();

        if ($kelurahan) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Kelurahan!',
                'data'    => $kelurahan
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kelurahan Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kelurahan'   => 'required',
            'id_kecamatan' => 'required'
        ],
            [
                'id_kecamatan.required' => 'Masukkan Id Kecamatan!',
                'nama_kelurahan.required' => 'Masukkan Nama Kelurahan!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kelurahan = Kelurahan::whereId($request->input('id'))->update([
                'id_kecamatan' => $request->input('id_kecamatan'),
                'nama_kelurahan' => $request->input('nama_kelurahan'),
            ]);


            if ($kelurahan) {
                return response()->json([
                    'success' => true,
                    'message' => 'kelurahan Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kelurahan Gagal Diupdate!',
                ], 500);
            }

        }
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();

        if ($kelurahan) {
            return response()->json([
                'success' => true,
                'message' => 'kelurahan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kelurahan Gagal Dihapus!',
            ], 500);
        }
    }
}
