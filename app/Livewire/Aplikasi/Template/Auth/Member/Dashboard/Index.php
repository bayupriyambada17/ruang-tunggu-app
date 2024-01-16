<?php

namespace App\Livewire\Aplikasi\Template\Auth\Member\Dashboard;

use App\Models\TransaksiRuang;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $transaksi = TransaksiRuang::where('tanggal_transaksi', today())->paginate(10);
        return view('livewire.aplikasi.template.auth.member.dashboard.index', [
            'transaksi' => $transaksi
        ])->layout('components.layouts.cms');
    }
}
