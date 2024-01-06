<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms;

use App\Models\LaporanRuangModel;
use App\Models\RuangModel;
use App\Models\SubRuangModel;
use App\Models\TransaksiRuang;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        function generateRandomColor()
        {
            return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        }

        $modelNames = [
            'LaporanRuangModel' => ['icon' => 'badge-dollar-sign', 'judul' => 'Laporan Ruang'],
            'RuangModel' => ['icon' => 'folder-dot', 'judul' => 'Sub Ruang'],
            'SubRuangModel' => ['icon' => 'folder-root', 'judul' => 'Ruang'],
            'TransaksiRuang' => ['icon' => 'history', 'judul' => 'Transaksi Ruang'],
        ];


        $data = [];

        foreach ($modelNames as $modelName => $modelInfo) {

            $count = app("App\\Models\\$modelName")->count();

            $data[$modelName] = [
                'nama' => $modelInfo['judul'],
                'total' => $count,
                'icon' => $modelInfo['icon'],
                'color' => generateRandomColor(),
            ];
        }

        return view('livewire.aplikasi.template.pages.cms.dashboard', [
            'data' => $data
        ])->layout('components.layouts.cms');
    }
}
