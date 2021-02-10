<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rw;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Validator;

class RwController extends Controller
{
    public function index()
    {
        $rw = Rw::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Rw',
            'data' => $rw
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_rw' => 'required|unique:rws',
            'id_kelurahan' => 'required'
        ],
            [
                'id_kelurahan.required' => 'Masukkan Id Kelurahan!',
                'no_rw.required' => 'Masukkan No Rw!',
                'no_rw.unique' => 'No Rw Sudah Terpakai!'
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $rw = Rw::create([
                'id_kelurahan' => $request->input('id_kelurahan'),
                'no_rw' => $request->input('no_rw')
            ]);


            if ($rw) {
                return response()->json([
                    'success' => true,
                    'message' => 'rw Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'rw Gagal Disimpan!',
                ], 400);
            }
        }
    }

    public function show($id)
    {
        $rw = Rw::whereId($id)->first();

        if ($rw) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Rw!',
                'data'    => $rw
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'rw Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_rw'     => 'required',
            'no_rw'   => 'required',
            'id_kelurahan' => 'required'
        ],
            [
                'id_kelurahan.required' => 'Masukkan Id Kelurahan!',
                'no_rw.required' => 'Masukkan No Rw!',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],400);

        } else {

            $rw = Rw::whereId($request->input('id'))->update([
                'id_kelurahan' => $request->input('id_kelurahan'),
                'no_rw' => $request->input('no_rw'),
            ]);


            if ($rw) {
                return response()->json([
                    'success' => true,
                    'message' => 'rw Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'rw Gagal Diupdate!',
                ], 500);
            }

        }
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id);
        $rw->delete();

        if ($rw) {
            return response()->json([
                'success' => true,
                'message' => 'rw Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'rw Gagal Dihapus!',
            ], 500);
        }
    }
}
