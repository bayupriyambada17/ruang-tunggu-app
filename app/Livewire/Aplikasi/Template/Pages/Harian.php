<?php

namespace App\Livewire\Aplikasi\Template\Pages;

use App\Models\TransaksiRuang;
use Livewire\Component;

class Harian extends Component
{
    public $tanggal_filter = '';

    public function render()
    {
        $semuaTransaksi = TransaksiRuang::with('user', 'subRuang')
        ->orderBy('created_at', 'desc');

        if ($this->tanggal_filter) {
            $semuaTransaksi->whereDate("tanggal_transaksi", '=', $this->tanggal_filter);
        }

        return view('livewire.aplikasi.template.pages.harian', [
            'semuaTransaksi' => $semuaTransaksi->paginate(10)
        ]);
    }
}
