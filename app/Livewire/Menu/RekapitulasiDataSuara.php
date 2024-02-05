<?php

namespace App\Livewire\Menu;

use App\Models\CalonRt;
use Livewire\Component;

class RekapitulasiDataSuara extends Component
{
    public function render()
    {
        $datas = CalonRt::oldest()->get();
        return view('livewire.menu.rekapitulasi-data-suara', compact('datas'));
    }
}
