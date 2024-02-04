<?php

namespace App\Livewire\Dashboard;

use App\Models\CalonRt;
use App\Models\DataRt;
use Livewire\Component;

class Dashboard extends Component
{
    public $count;
    public $calon;
    public function render()
    {
        $this->count = DataRt::with('data_rts')->count();
        $this->calon = CalonRt::with('calon_rts')->count();

        return view('livewire.dashboard.dashboard');
    }
}
