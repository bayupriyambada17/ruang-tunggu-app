<?php

namespace App\Livewire\Aplikasi\Template;

use App\Models\RuangModel;
use App\Models\SubRuangModel;
use Livewire\Component;

class Pages extends Component
{
    public $ruang_id, $semuaSubRuang;


    public function filteringRuang()
    {
        if ($this->ruang_id && $this->semuaSubRuang) {
            return SubRuangModel::where('ruang_id', $this->ruang_id)->get();
        }

        return SubRuangModel::with('ruang:id,nama_ruangan')->get();
    }

    public function render()
    {
        $semuaRuang = RuangModel::withCount('subsRuang')->get();
        $this->semuaSubRuang = $this->filteringRuang();

        return view('livewire.aplikasi.template.pages', [
            'semuaRuang' => $semuaRuang,
            'semuaSubRuang' => $this->semuaSubRuang,
        ]);
    }
}
