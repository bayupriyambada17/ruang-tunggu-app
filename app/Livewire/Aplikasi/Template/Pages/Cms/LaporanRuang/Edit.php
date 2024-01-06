<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang;

use Livewire\Component;
use App\Models\SubRuangModel;
use App\Models\LaporanRuangModel;

class Edit extends Component
{
    public $laporanRuangId, $sub_ruang_id, $catatan_laporan;
    public function mount($laporanRuangId)
    {
        $laporanId = LaporanRuangModel::find($laporanRuangId);
        $this->laporanRuangId = $laporanId->id;
        $this->sub_ruang_id = $laporanId->sub_ruang_id;
        $this->catatan_laporan = $laporanId->catatan_laporan;
    }

    public function updateForm()
    {
        $this->validate([
            'sub_ruang_id' => 'required',
            'catatan_laporan' => 'required|min:1|max:255'
        ]);

        $laporanId = LaporanRuangModel::find($this->laporanRuangId);

        $laporanId->update([
            'sub_ruang_id' => $this->sub_ruang_id,
            'catatan_laporan' => $this->catatan_laporan,
        ]);
        session()->flash('message', 'Berhasil mengubah laporan ruang kerusakan');
        return redirect(route('laporanRuang.index'));
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.pages.cms.laporan-ruang.edit', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
