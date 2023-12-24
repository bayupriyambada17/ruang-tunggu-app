<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang;

use App\Models\RuangModel;
use App\Models\SubRuangModel;
use Livewire\Component;

class Edit extends Component
{
    public $no_ruang, $nama_sub_ruang, $ruang_id, $pabx,
        $kap, $kap_ujian, $fas_ac, $fas_lcd, $fas_komp,
        $fas_inet, $fas_audio, $ukuran_panjang, $ukuran_lebar,
        $ukuran_tinggi, $ukuran_luas, $link, $subRuangId;

    public function mount($nama_sub_ruang)
    {
        $ruangan = SubRuangModel::where("nama_sub_ruang", $nama_sub_ruang)->first();
        $this->subRuangId = $ruangan->id;
        $this->no_ruang = $ruangan->no_ruang;
        $this->nama_sub_ruang = $ruangan->nama_sub_ruang;
        $this->ruang_id = $ruangan->ruang_id;
        $this->pabx = $ruangan->pabx;
        $this->kap = $ruangan->kap;
        $this->kap_ujian = $ruangan->kap_ujian;
        $this->fas_ac = $ruangan->fas_ac;
        $this->fas_lcd = $ruangan->fas_lcd;
        $this->fas_komp = $ruangan->fas_komp;
        $this->fas_inet = $ruangan->fas_inet;
        $this->fas_audio = $ruangan->fas_audio;
        $this->ukuran_panjang = $ruangan->ukuran_panjang;
        $this->ukuran_lebar = $ruangan->ukuran_lebar;
        $this->ukuran_tinggi = $ruangan->ukuran_tinggi;
        $this->ukuran_luas = $ruangan->ukuran_luas;
        $this->link = $ruangan->link;
    }

    public function updateForm()
    {
        $this->validate([
            'no_ruang' => 'required',
            'nama_sub_ruang' => 'required',
            'ruang_id' => 'required',
            'pabx' => 'required',
            'kap' => 'required',
            'kap_ujian' => 'required',
            'fas_ac' => 'required|boolean ',
            'fas_komp' => 'required|boolean ',
            'fas_lcd' => 'required|boolean ',
            'fas_audio' => 'required|boolean ',
            'fas_inet' => 'required|boolean ',
            'ukuran_panjang' => 'required',
            'ukuran_luas' => 'required',
            'ukuran_tinggi' => 'required',
            'ukuran_lebar' => 'required',
            'link' => 'required',
        ]);

        SubRuangModel::where('id', $this->subRuangId)->update([
            'no_ruang' => $this->no_ruang,
            'nama_sub_ruang' => $this->nama_sub_ruang,
            'ruang_id' => $this->ruang_id,
            'pabx' => $this->pabx,
            'kap' => $this->kap,
            'kap_ujian' => $this->kap_ujian,
            'fas_ac' => $this->fas_ac,
            'fas_komp' => $this->fas_komp,
            'fas_lcd' => $this->fas_lcd,
            'fas_audio' => $this->fas_audio,
            'fas_inet' => $this->fas_inet,
            'ukuran_panjang' => $this->ukuran_panjang,
            'ukuran_luas' => $this->ukuran_luas,
            'ukuran_tinggi' => $this->ukuran_tinggi,
            'ukuran_lebar' => $this->ukuran_lebar,
            'link' => $this->link,
        ]);
        session()->flash('message', 'Berhasil mengubah data!.');
        return redirect(route('subruang.index'));
    }
    public function render()
    {
        $semuaRuang = RuangModel::orderBy("created_at", 'desc')->get();
        return view('livewire.aplikasi.template.pages.cms.sub-ruang.edit', [
            'semuaRuang' => $semuaRuang
        ])->layout('components.layouts.cms');
    }
}
