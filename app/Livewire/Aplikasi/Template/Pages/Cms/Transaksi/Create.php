<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi;

use Livewire\Component;
use App\Models\SubRuangModel;
use Illuminate\Support\Str;
use App\Models\TransaksiRuang;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $sub_ruang_id, $user_id, $tanggal, $start_time, $end_time, $deskripsi_ruang, $transaksi_id;

    public function saveForm()
    {
        $this->validate([
            'sub_ruang_id' => 'required',
            'start_time' => 'required',
            'end_time' => [
                'required',
                'after:start_time',
            ],
            'deskripsi_ruang' => 'nullable',
        ], [
            'start_time.required' => 'Waktu Mulai Harus Diisikan.',
            'end_time.required' => 'Waktu Akhir Harus Diisikan.',
            'end_time.after' => 'Waktu selesai harus setelah waktu mulai.',
            'sub_ruang_id.required' => "Sub Ruang Harus Di Isikan."
        ]);

        $subRuang = SubRuangModel::where("id", $this->sub_ruang_id)->first();
        $transaksiRuang = TransaksiRuang::where("sub_ruang_id", $subRuang->id)
            ->where("start_time", '=', $this->start_time)
            ->where("end_time", "<=", $this->end_time)
            ->whereDate("tanggal_transaksi", Carbon::today())->first();
        if ($transaksiRuang) {
            session()->flash('error', 'Waktu ' . $this->start_time . ' s/d ' . $this->end_time . ' hari ini telah digunakan, pilih waktu lain atau tanggal lain!');
        } else {
            TransaksiRuang::create([
                'transaksi_kode' => 'tr-ruang-' . Str::random(10),
                'user_id' => Auth::id(),
                'sub_ruang_id' => $this->sub_ruang_id,
                'start_time' => $this->start_time,
                'end_time' => $this->end_time,
                'deskripsi_ruang' => $this->deskripsi_ruang,
                'tanggal_transaksi' => now(),
            ]);
            session()->flash('message', 'Transaksi berhasil dibuat.');
            return redirect(route('transaksi.index'));
        }
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.pages.cms.transaksi.create', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
