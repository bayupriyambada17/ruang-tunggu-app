<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\SubRuang;

use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\SubRuangModel;

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
        $subRuang = SubRuangModel::find($id);
        $subRuang->delete();
        session()->flash('message', 'Berhasil menghapus Ruang!.');
    }

    public function render()
    {
        $subRuang = SubRuangModel::
            // ->where("nama_ruangan", 'LIKE', '%' . $this->search . '%')
            with('ruang:id,nama_ruangan')
            ->orderBy('created_at', 'desc')->paginate($this->countData);
        return view('livewire.aplikasi.template.pages.cms.sub-ruang.index', [
            'subRuang' => $subRuang
        ])->layout('components.layouts.cms');
    }
}
