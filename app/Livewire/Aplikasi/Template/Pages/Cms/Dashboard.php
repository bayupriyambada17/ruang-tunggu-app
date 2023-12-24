<?php

namespace App\Livewire\Aplikasi\Template\Pages\Cms;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.aplikasi.template.pages.cms.dashboard')->layout('components.layouts.cms');
    }
}
