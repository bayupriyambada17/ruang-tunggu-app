<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\LaporanRuang;

use App\Models\LaporanRuangModel;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $countData = 10;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $semuaLaporanRuang = LaporanRuangModel::orderBy('tanggal_laporan')->paginate($this->countData);
        return view('livewire.aplikasi.template.pages.cms.laporan-ruang.index', [
            'semuaLaporanRuang' => $semuaLaporanRuang
        ])
            ->layout('components.layouts.cms');
    }
}
