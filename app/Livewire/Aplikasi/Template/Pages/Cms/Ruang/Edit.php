<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Ruang;

use App\Models\RuangModel;
use Livewire\Component;

class Edit extends Component
{
    public $ruangNama, $ruangId, $nama_ruangan;
    public function mount($nama_ruangan)
    {
        $ruangan = RuangModel::where("nama_ruangan", $nama_ruangan)->first();
        $this->ruangId = $ruangan->id;
        $this->nama_ruangan = $ruangan->nama_ruangan;
    }

    public function updateForm()
    {
        $this->validate([
            'nama_ruangan' => 'required|min:1'
        ]);

        RuangModel::where('id', $this->ruangId)->update(['nama_ruangan' => $this->nama_ruangan]);
        session()->flash('message', 'Berhasil mengubah data!.');
        return redirect(route('ruang.index'));
    }
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.ruang.edit')->layout('components.layouts.cms');
    }
}
