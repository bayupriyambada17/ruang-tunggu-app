<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Pengaturan;

use Livewire\Component;
use App\Models\SettingModel;

class Index extends Component
{
    public $pengaturan, $nama_aplikasi;

    public function mount()
    {
        $this->pengaturan = SettingModel::where("id", 1)->first();
        $this->nama_aplikasi = $this->pengaturan->nama_aplikasi;
    }

    public function updateForm()
    {
        $this->pengaturan->nama_aplikasi = $this->nama_aplikasi;
        $this->pengaturan->save();
        session()->flash('message', 'Pengaturan berhasil diperbaharui');
    }

    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.pengaturan.index')->layout('components.layouts.cms');
    }
}
