<?php

namespace App\Livewire\Menu;

use App\Models\CalonRt;
use App\Models\DaftarPemilih;
use App\Models\DataRt;
use Livewire\Component;

class JumlahDaftarPemilih extends Component
{
    public $is_create;
    public $is_update;
    public $take = 5;
    public $no_rt;
    public $jumlah_daftar;
    public $calon_rt_id;

    // public $calons;

    public function render()
    {
        $data = DaftarPemilih::latest();
        $datas = $data->paginate($this->take);
        $norts = DataRt::latest()->get();
        return view('livewire.menu.jumlah-daftar-pemilih', compact('datas', 'norts'));
    }

    public function mount()
    {
        // $this->calons = CalonRt::latest();
    }

    // create data
    public function create()
    {
        $data = new DaftarPemilih();
        $data->calon_rt_id = CalonRt::where('keterangan', $this->no_rt)->first()->id;
        $data->no_rt = $this->no_rt;
        $data->jumlah_daftar = $this->jumlah_daftar;
        $data->save();
        $this->dispatch('success', ['pesan'=>'Data berhasil disimpan']);
        $this->is_create = !$this->is_create;
    }

    // update data
    public function update()
    {

    }

    // delete data
    public function delete()
    {

    }

    // on create
    public function onCreate()
    {
        $this->is_create = !$this->is_create;
    }

    // on update
    public function onUpdate()
    {

    }
}
