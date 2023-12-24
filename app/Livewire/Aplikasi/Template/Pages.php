<?php

namespace App\Livewire\Aplikasi\Template;

use App\Models\RuangModel;
use App\Models\SubRuangModel;
use Livewire\Component;

class Pages extends Component
{
    // public $ruang_id, $semuaSubRuang;
    // public function filteringRuang()
    // {
    //     if ($this->ruang_id && $this->semuaSubRuang) {
    //         return SubRuangModel::with('ruang:id,nama_ruangan')->where('ruang_id', $this->ruang_id)->get();
    //     }

    //     return SubRuangModel::with('ruang:id,nama_ruangan')->get();
    // }

    // public function render()
    // {
    //     $semuaRuang = RuangModel::withCount('subsRuang')->orderBy('created_at', 'desc')->get();
    //     $this->semuaSubRuang = $this->filteringRuang();

    //     return view('livewire.aplikasi.template.pages', [
    //         'semuaRuang' => $semuaRuang,
    //         'semuaSubRuang' => $this->semuaSubRuang,
    //     ]);
    // }


    public $ruang_id, $semuaSubRuang, $selectedRuangName;

    public function mount()
    {
        // Check if there is a query parameter 'ruangName'
        $ruangNameParam = request()->query('ruangName');

        if ($ruangNameParam) {
            // Find the room ID based on the name
            $ruang = RuangModel::where('nama_ruangan', $ruangNameParam)->first();

            if ($ruang) {
                // Set the room ID and fetch the sub-rooms
                $this->ruang_id = $ruang->id;
                $this->filteringRuang();
            }
        }
    }


    public function filteringRuang()
    {
        if ($this->ruang_id) {
            $this->semuaSubRuang = SubRuangModel::with('ruang:id,nama_ruangan')->where('ruang_id', $this->ruang_id)->get();
            $this->selectedRuangName = RuangModel::find($this->ruang_id)->nama_ruangan;
        } else {
            $this->semuaSubRuang = SubRuangModel::with('ruang:id,nama_ruangan')->get();
            $this->selectedRuangName = null;
        }
    }

    public function render()
    {
        $semuaRuang = RuangModel::withCount('subsRuang')->orderBy('created_at', 'desc')->get();
        $this->filteringRuang();

        return view('livewire.aplikasi.template.pages', [
            'semuaRuang' => $semuaRuang,
            'selectedRuangName' => $this->selectedRuangName,
            'semuaSubRuang' => $this->semuaSubRuang,
        ]);
    }
}
