<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\TransaksiRuang;

class Index extends Component
{
    use WithPagination;
    public $countData = 10;

    #[Url]
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $semuaTransaksi = TransaksiRuang::with('user', 'subRuang')
            ->orderBy('tanggal_transaksi', 'desc')
            ->paginate($this->countData);

        return view('livewire.aplikasi.template.pages.cms.transaksi.index', [
            'semuaTransaksi' => $semuaTransaksi
        ])->layout('components.layouts.cms');
    }
}
