<?php

namespace App\Livewire\Aplikasi\Template\Auth\Member\Dashboard;

use Livewire\Component;
use App\Models\TransaksiRuang;
use App\Models\LaporanRuangModel;

class Index extends Component
{
    public function render()
    {
        $transaksi = TransaksiRuang::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        $laporan = LaporanRuangModel::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.aplikasi.template.auth.member.dashboard.index', [
            'transaksi' => $transaksi,
            'laporan' => $laporan
        ])->layout('components.layouts.cms');
    }
}
