<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang;

use App\Models\LaporanRuangModel;
use App\Models\SubRuangModel;
use Livewire\Component;

class Create extends Component
{
    public $sub_ruang_id, $catatan_laporan;
    public function saveForm()
    {
        $this->validate([
            'sub_ruang_id' => 'required',
            'catatan_laporan' => 'required|min:1|max:255'
        ]);

        LaporanRuangModel::create([
            'sub_ruang_id' => $this->sub_ruang_id,
            'catatan_laporan' => $this->catatan_laporan,
            'tanggal_laporan' => now()
        ]);

        session()->flash('message', 'Berhasil menambahkan laporan ruang kerusakan baru');
        return redirect(route('laporanRuang.index'));
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.pages.cms.laporan-ruang.create', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
