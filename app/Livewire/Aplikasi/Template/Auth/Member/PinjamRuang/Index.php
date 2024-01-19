<?php

namespace App\Livewire\Aplikasi\Template\Auth\Member\PinjamRuang;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\SubRuangModel;
use App\Models\TransaksiRuang;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $sub_ruang_id, $user_id, $tanggal, $start_time, $end_time, $deskripsi_ruang, $transaksi_id, $tanggal_transaksi;

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
            'tanggal_transaksi' => [
                'required',
                'date',
                'after_or_equal:today',
            ],
        ], [
            'start_time.required' => 'Waktu Mulai Harus Diisikan.',
            'end_time.required' => 'Waktu Akhir Harus Diisikan.',
            'end_time.after' => 'Waktu selesai harus setelah waktu mulai.',
            'sub_ruang_id.required' => "Sub Ruang Harus Di Isikan.",
            'tanggal_transaksi.required' => 'Tanggal Transaksi harus di isikan',
            'tanggal_transaksi.after_or_equal' => 'Tanggal Transaksi tidak boleh kurang dari hari ini'
        ]);

        $subRuang = SubRuangModel::find($this->sub_ruang_id);

        if ($subRuang) {
            $existingTransaction = TransaksiRuang::where('sub_ruang_id', $subRuang->id)
                ->where(function ($query) {
                    $query->where(function ($q) {
                        $q->where("end_time", ">", $this->start_time)
                            ->where("start_time", "<", $this->start_time);
                    })->orWhere(function ($q) {
                        $q->where("start_time", "<", $this->end_time)
                            ->where("end_time", ">", $this->start_time);
                    });
                })
                ->whereDate("tanggal_transaksi", '=', $this->tanggal_transaksi)
                ->exists();

            if ($existingTransaction) {
                session()->flash('error', 'Pada waktu yang diisikan pada tanggal ' . $this->tanggal_transaksi . ' sudah ada. Pilihlah waktu lain / tanggal lain');
                return;
            } else {
                TransaksiRuang::create([
                    'transaksi_kode' => 'tr-ruang-' . Str::random(10),
                    'user_id' => Auth::id(),
                    'sub_ruang_id' => $this->sub_ruang_id,
                    'start_time' => $this->start_time,
                    'end_time' => $this->end_time,
                    'deskripsi_ruang' => $this->deskripsi_ruang,
                    'tanggal_transaksi' => $this->tanggal_transaksi,
                ]);
                session()->flash('message', 'Transaksi berhasil dibuat.');
                return redirect(route('member.dashboard.index'));
            }
        }
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.auth.member.pinjam-ruang.index', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
