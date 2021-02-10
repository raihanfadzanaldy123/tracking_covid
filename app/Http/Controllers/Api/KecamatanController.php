<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Support\Facades\Validator;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Kecamatan',
            'data' => $kecamatan
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kecamatan' => 'required|unique:kecamatans',
            'id_kota' => 'required'
        ],
            [
                'id_kota.required' => 'Masukkan Id Kota!',
                'nama_kecamatan.required' => 'Masukkan Nama Kecamatan!',
                'nama_kecamatan.unique' => 'Nama Kecamatan Sudah Terpakai!'
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kecamatan = Kecamatan::create([
                'id_kota' => $request->input('id_kota'),
                'nama_kecamatan' => $request->input('nama_kecamatan')
            ]);


            if ($kecamatan) {
                return response()->json([
                    'success' => true,
                    'message' => 'kecamatan Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kecamatan Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::whereId($id)->first();

        if ($kecamatan) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Kecamatan!',
                'data'    => $kecamatan
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kecamatan Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_kecamatan'     => 'required',
            'nama_kecamatan'   => 'required',
            'id_kota' => 'required'
        ],
            [
                'id_kota.required' => 'Masukkan Id Kota!',
                'nama_kecamatan.required' => 'Masukkan Nama Kecamatan!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kecamatan = Kecamatan::whereId($request->input('id'))->update([
                'id_kota' => $request->input('id_kota'),
                'nama_kecamatan' => $request->input('nama_kecamatan'),
            ]);


            if ($kecamatan) {
                return response()->json([
                    'success' => true,
                    'message' => 'kecamatan Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kecamatan Gagal Diupdate!',
                ], 500);
            }

        }
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->delete();

        if ($kecamatan) {
            return response()->json([
                'success' => true,
                'message' => 'kecamatan Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kecamatan Gagal Dihapus!',
            ], 500);
        }
    }
}
