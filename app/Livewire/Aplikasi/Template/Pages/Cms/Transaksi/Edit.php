<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Transaksi;

use Livewire\Component;
use App\Models\SubRuangModel;
use App\Models\TransaksiRuang;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $transaksiKodeId, $deskripsi_ruang, $transaksi_kode, $start_time, $end_time, $sub_ruang_id, $tanggal_transaksi;
    public function mount($transaksiKodeId)
    {
        $kodeTransaksiId = TransaksiRuang::where("transaksi_kode", $transaksiKodeId)->first();
        $this->transaksiKodeId = $kodeTransaksiId->id;
        $this->transaksi_kode = $kodeTransaksiId->transaksi_kode;
        $this->start_time = $kodeTransaksiId->start_time;
        $this->end_time = $kodeTransaksiId->end_time;
        $this->sub_ruang_id = $kodeTransaksiId->sub_ruang_id;
        $this->tanggal_transaksi = $kodeTransaksiId->tanggal_transaksi;
        $this->deskripsi_ruang = $kodeTransaksiId->deskripsi_ruang;
    }

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
                ->where("id", "!=", $this->transaksiKodeId)
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
                TransaksiRuang::where('id', $this->transaksiKodeId)->update([
                    'user_id' => Auth::id(),
                    'sub_ruang_id' => $this->sub_ruang_id,
                    'start_time' => $this->start_time,
                    'end_time' => $this->end_time,
                    'deskripsi_ruang' => $this->deskripsi_ruang,
                    'tanggal_transaksi' => $this->tanggal_transaksi,
                ]);
                session()->flash('message', 'Transaksi berhasil diubah.');
                return redirect(route('transaksi.index'));
            }
        }
    }
    public function render()
    {
        $subRuang = SubRuangModel::get();
        return view('livewire.aplikasi.template.pages.cms.transaksi.edit', [
            'subRuang' => $subRuang,
        ])->layout('components.layouts.cms');
    }
}
