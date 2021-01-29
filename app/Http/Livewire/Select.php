<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\R_w_;
use App\Models\Kasuse;




class Select extends Component
{
    public $provinsi;
    public $kota ;
    public $kecamatan;
    public $kelurahan;
    public $r_w_;
    public $kasuse;


    public $selectedState = NULL;
    public $selectedState2 = NULL;
    public $selectedState3 = NULL;
    public $selectedState4 = NULL;
    public $selectedState5 = NULL;
    public $selectedRw = NULL;



    
    public function mount($selectedRw = null)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();;
        $this->kecamatan = collect();;
        $this->kelurahan = collect();;
        $this->r_w_ = collect();;
        $this->kasuse = collect();;
        $this->selectedRw = $selectedRw;
        if (!is_null($selectedRw)) {
            $r_w_ = R_w_::with('kelurahan.kecamatan.kota.provinsi')->find($selectedRw);
            if ($r_w_) {
                $this->r_w_ = R_w_::where('id_kelurahan', $r_w_->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $r_w_->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $r_w_->kelurahan->kecamatan->id_kota)->get();
                $this->kota = Kota::where('id_provinsi', $r_w_->kelurahan->kecamatan->kota->id_provinsi)->get();
                $this->selectedState = $r_w_->kelurahan->kecamatan->kota->id_provinsi;
                $this->selectedState2 = $r_w_->kelurahan->kecamatan->id_kota;
                $this->selectedState3 = $r_w_->kelurahan->id_kecamatan;
                $this->selectedState4 = $r_w_->id_kelurahan;
            }
        }
    }
    
    
    
    
    public function render()
    {
        return view('livewire.select');
    }
    public function updatedSelectedState($provinsi)
    {
        if (!is_null($provinsi)) {
            $this->kota = Kota::where('id_provinsi', $provinsi)->get();
        }
    }
    public function updatedSelectedState2($kota)
    {
        if (!is_null($kota)) {
            $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        }
    }
    public function updatedSelectedState3($kecamatan)
    {
        if (!is_null($kecamatan)) {
            $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        }
    }
    public function updatedSelectedState4($kelurahan)
    {
        if (!is_null($kelurahan)) {
            $this->r_w_ = R_w_::where('id_kelurahan', $kelurahan)->get();
        }
    }
    public function updatedSelectedState5($r_w_)
    {
        if (!is_null($r_w_)) {
            $this->r_w_ = Kasuse::where('id_rw', $r_w_)->get();
        }
    }
}







