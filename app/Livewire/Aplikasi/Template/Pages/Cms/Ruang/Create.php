<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Ruang;

use Livewire\Component;
use App\Models\RuangModel;

class Create extends Component
{
    public $nama_ruangan;
    public function saveForm()
    {
        $validation = $this->validate([
            'nama_ruangan' => 'required|min:1'
        ]);
        RuangModel::create($validation);
        session()->flash('message', 'Berhasil menambahkan data baru!.');
        return redirect(route('ruang.index'));
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.ruang.create')->layout('components.layouts.cms');
    }
}
