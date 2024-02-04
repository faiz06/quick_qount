<?php

namespace App\Livewire\Menu;

use App\Models\CalonRt;
use App\Models\DataRt;
use App\Models\DataSuara as ModelsDataSuara;
use Livewire\Component;

class DataSuara extends Component
{
    public $is_create = true;
    public $is_update;
    public $keterangan;
    public $no_rt;
    public $n = 0;
    public $jumlah_suara;
    public $datasuara = [];
    public $idcalon = [];

    public function render()
    {
        // dalam 1 RT calon >= 1, maka ambil data banyak calon berdasarkan RT
        $isdata = CalonRt::latest()->where('keterangan', $this->keterangan)->get();
        // @dd($isdata);
        $datarts = DataRt::oldest()->get();
        return view('livewire.menu.data-suara', compact('isdata', 'datarts'));
    }

    // create data
    public function create()
    {
        // $d = [$this->jumlah_suara.$i];
        // $formData = [];
        // for($i = 1; $i<=$this->n;$i++){
        //     $formData[] = $this->jumlah_suara;
        // }
        $datasuara = $this->datasuara;
        $idcalon = $this->idcalon;
        $new_data = new ModelsDataSuara();
        $cariid = CalonRt::where('keterangan', $this->keterangan)->orderBy('no_urut', 'DESC')->get();
        // @dd($cariid);
        $n = 0;
        // @dd($datasuara);
        foreach($datasuara as $suara){
            // @dd($suara);
            // if($cariid)
            // @dd(var_dump($cariid->no_urut));
            // {
                // @dd($cariid[$n]->no_urut);
                // if($cariid[$n]->no_urut==$idcalon[$n]){
                //     $new_data->calon_rt_id = $cariid[$n]->id;
                //     $new_data->no_urut = $cariid[$n]->no_urut;
                // }
            // }
            // $new_data->calon_rt_id = $idcalon[$n];
            $new_data->no_rt = $this->keterangan;
            $new_data->no_urut = $idcalon[$n];
            $new_data->jumlah_suara = $suara;
            $new_data::create([
                'no_rt'=>$this->keterangan,
                'no_urut'=>$idcalon[$n],
                'jumlah_suara'=>$suara,
            ]);
            $n++;
        }
        $this->reset('idcalon');
        // @dd($datasuara);
    }
}
