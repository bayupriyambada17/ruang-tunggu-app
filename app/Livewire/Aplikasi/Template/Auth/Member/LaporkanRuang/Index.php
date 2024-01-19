<?php

namespace App\Livewire\Aplikasi\Template\Auth\Member\LaporkanRuang;

use Livewire\Component;
use App\Models\SubRuangModel;
use App\Models\LaporanRuangModel;

class Index extends Component
{
    public $sub_ruang_id, $catatan_laporan, $type;
    public function saveForm()
    {
        $this->validate([
            'sub_ruang_id' => 'required',
            'catatan_laporan' => 'required|min:1|max:255'
        ]);

        LaporanRuangModel::create([
            'sub_ruang_id' => $this->sub_ruang_id,
            'user_id' => auth()->user()->id,
            'catatan_laporan' => $this->catatan_laporan,
            'type' => $this->type,
            'tanggal_laporan' => now()
        ]);

        session()->flash('message', 'Berhasil menambahkan laporan ruang kerusakan baru');
        return redirect(route('member.dashboard.index'));
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.auth.member.laporkan-ruang.index', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
