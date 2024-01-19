<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms\User;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

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
        $subRuang = User::find($id);
        $subRuang->delete();
        session()->flash('message', 'Berhasil menghapus user!.');
    }
    public function render()
    {
        $userPeminjam = User::where("role", "peminjam")
            ->where("name", "LIKE", "%" . $this->search . "%")
            ->paginate($this->countData);
        return view('livewire.aplikasi.template.pages.cms.user.index', [
            'userPeminjam' => $userPeminjam
        ])->layout('components.layouts.cms');
    }
}
