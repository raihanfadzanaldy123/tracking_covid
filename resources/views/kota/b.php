<?php

namespace App\Http\Livewire;

use App\Models\rw;
use App\Models\kelurahan;
use App\Models\kecamatan;
use App\Models\kota;
use App\Models\provinsi;
use App\Models\kasus;
use Livewire\Component;

class Livewire extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedProvinsi = null;
    public $selectedKota = null;
    public $selectedKecamatan = null;
    public $selectedKelurahan = null;
    public $selectedRw = null;

    public function mount($selectedRw = null)
    {
        $this->provinsi = provinsi::all();
        $this->kota = kota::with('provinsi')->get();
        $this->kecamatan = kecamatan::whereHas('kota', function ($query) {
            $query->whereId(request()->input('id_kota', 0));
        })->pluck('nama_kecamatan', 'id');
        $this->kelurahan = kelurahan::whereHas('kecamatan', function ($query) {
            $query->whereId(request()->input('id_kecamatan', 0));
        })->pluck('nama_kelurahan', 'id');
        $this->rw = rw::whereHas('kelurahan', function ($query) {
            $query->whereId(request()->input('id_kelurahan', 0));
        })->pluck('nama_rw', 'id');
        $this->selectedRw = $selectedRw;

        if (!is_null($selectedRw)) {
            $rw = rw::with('kelurahan.kecamatan.kota.provinsi')->find($selectedRw);
            if ($rw) {
                $this->rw = rW::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = kecamatan::where('id_kota', $rw->kelurahan->kecamatan->id_kota)->get();
                $this->kota = kota::where('id_provinsi', $rw->kelurahan->kecamatan->kota->id_provinsi)->get();
                $this->selectedProvinsi =$rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->selectedKota = $rw->kelurahan->kecamatan->id_kota;
                $this->selectedKecamatan = $rw->kelurahan->id_kecamatan;
                $this->selectedKelurahan = $rw->id_kelurahan;
            }
        }
    }

    public function render()
    {
        return view('livewire.livwer');
    }

    public function updatedSelectedProvinsi($provinsi)
    {
        $this->kota = kota::where('id_provinsi', $provinsi)->get();
        $this->selectedKota = NULL;
        $this->selectedKecamatan = NULL;
        $this->selectedKelurahan = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKota($kota)
    {
        $this->kecamatan = kecamatan::where('id_kota', $kota)->get();
        $this->selectedKecamatan = NULL;
        $this->selectedKelurahan = NULL;
        $this->selectedRw = NULL;
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->kelurahan = kelurahan::where('id_kecamatan', $kecamatan)->get();
        $this->selectedKelurahan = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKelurahan($kelurahan)
    {
        if (!is_null($kelurahan)) {
            $this->rw = rw::where('id_kelurahan', $kelurahan)->get();
        }else{
            $this->selectedRw = NULL;
        }
    }
}