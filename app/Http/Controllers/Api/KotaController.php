<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Validator;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Kota',
            'data' => $kota
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_kota' => 'required|unique:kotas',
            'nama_kota' => 'required|unique:kotas',
            'id_provinsi' => 'required'
        ],
            [
                'id_provinsi.required' => 'Masukkan Id Provinsi!',
                'kode_kota.required' => 'Masukkan Kode Kota!',
                'nama_kota.required' => 'Masukkan Nama Kota!',
                'kode_kota.unique' => 'Kode Kota Sudah Terpakai!',
                'nama_kota.unique' => 'Nama Kota Sudah Terpakai!'
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kota = Kota::create([
                'id_provinsi' => $request->input('id_provinsi'),
                'kode_kota' => $request->input('kode_kota'),
                'nama_kota' => $request->input('nama_kota')
            ]);


            if ($kota) {
                return response()->json([
                    'success' => true,
                    'message' => 'kota Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kota Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $kota = Kota::whereId($id)->first();

        if ($kota) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Kota!',
                'data'    => $kota
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kota Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_kota'     => 'required',
            'nama_kota'   => 'required',
            'id_provinsi' => 'required'
        ],
            [
                'id_provinsi.required' => 'Masukkan Id Provinsi!',
                'kode_kota.required' => 'Masukkan Kode Kota!',
                'nama_kota.required' => 'Masukkan Nama Kota!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $kota = Kota::whereId($request->input('id'))->update([
                'id_provinsi' => $request->input('id_provinsi'),
                'kode_kota' => $request->input('kode_kota'),
                'nama_kota' => $request->input('nama_kota'),
            ]);


            if ($kota) {
                return response()->json([
                    'success' => true,
                    'message' => 'kota Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'kota Gagal Diupdate!',
                ], 500);
            }

        }
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();

        if ($kota) {
            return response()->json([
                'success' => true,
                'message' => 'kota Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'kota Gagal Dihapus!',
            ], 500);
        }
    }
}
