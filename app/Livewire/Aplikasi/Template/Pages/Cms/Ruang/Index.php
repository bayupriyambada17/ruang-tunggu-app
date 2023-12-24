<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\Ruang;

use Livewire\Component;
use App\Models\RuangModel;
use App\Models\SubRuangModel;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use GuzzleHttp\Promise\Create;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $countData = 10;

    #[Url]
    public $search = '';

    public $konfirmasiHapus;

    public function confirmDeleting($id)
    {
        $this->konfirmasiHapus = $id;
    }
    public function destroy($id)
    {
        $ruang = RuangModel::find($id);

        if ($ruang) {
            $subRuang = SubRuangModel::where("ruang_id", $ruang->id)->first();

            if ($subRuang) {
                session()->flash('error', 'Terdapat Sub Ruang, tidak dapat dihapus!.');
            } else {
                $ruang->delete();
                session()->flash('message', 'Berhasil menghapus Ruang!.');
            }
        }
    }

    public function render()
    {
        $semuaRuang = RuangModel::withCount('subsRuang')
            ->where("nama_ruangan", 'LIKE', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')->paginate($this->countData);
        return view('livewire.aplikasi.template.pages.cms.ruang.index', [
            'semuaRuang' => $semuaRuang
        ])->layout('components.layouts.cms');
    }
}
