<?php

namespace App\Livewire\Menu;

use App\Models\CalonRt;
use App\Models\DataSuara;
use Livewire\Component;

class RekapitulasiDataSuara extends Component
{
    public function render()
    {
        $datas = CalonRt::oldest()->get();
        $datarekaps = DataSuara::oldest()->get();
        return view('livewire.menu.rekapitulasi-data-suara', compact('datas', 'datarekaps'));
    }
}
