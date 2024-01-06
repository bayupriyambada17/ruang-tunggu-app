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
    public $tanggalTransaksi = '';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $semuaTransaksi = TransaksiRuang::with('user', 'subRuang')
        ->orderBy('created_at', 'desc');

        if ($this->tanggalTransaksi) {
            $semuaTransaksi->whereDate("tanggal_transaksi", '=', $this->tanggalTransaksi);
        }
        return view('livewire.aplikasi.template.pages.cms.transaksi.index', [
            'semuaTransaksi' => $semuaTransaksi->paginate($this->countData)
        ])->layout('components.layouts.cms');
    }
}
