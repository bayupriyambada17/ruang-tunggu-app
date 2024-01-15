<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Ruang;

use App\Helpers\ValidatorMessage;
use Livewire\Component;
use App\Models\RuangModel;

class Create extends Component
{
    public $nama_ruangan;
    public function saveForm()
    {
        $this->validate([
            'nama_ruangan' => 'required|min:1'
        ], ValidatorMessage::validator());
        RuangModel::create([
            'nama_ruangan' => $this->nama_ruangan
        ]);
        session()->flash('message', 'Berhasil menambahkan data baru!.');
        return redirect(route('ruang.index'));
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.ruang.create')->layout('components.layouts.cms');
    }
}
