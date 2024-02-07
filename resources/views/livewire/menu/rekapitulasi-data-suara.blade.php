<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark bg-primary fw-semibold fs-3 shadow">
        <div class="container-fluid">
          @include('livewire.components.sidebar')
        </div>
    </aside>
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h1 class="text-center text-primary mt-5">
                            APLIKASI QUICK QOUNT RT KOMPLEK GRIYA PARAS JAYA
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            @if ($is_datart)
            {{-- data rt --}}
                @livewire('menu.data-rt')
            {{-- data rt --}}

            @elseif ($is_nama_calonrt)
            {{-- nama calon rt --}}
                @livewire('menu.nama-calon-rt')
            {{-- nama calon rt --}}

            @elseif ($is_jumlah_daftar_pemilih)
            {{-- jumlah daftar pemilih --}}
                @livewire('menu.jumlah-daftar-pemilih')
            {{-- jumlah daftar pemilih --}}

            @elseif ($is_data_suara)
            {{-- data suara --}}
                @livewire('menu.data-suara')
            {{-- data suara --}}

            @elseif ($is_rekapitulasi_data_suara)
            {{-- rekapitulasi data suara --}}
                @livewire('menu.rekapitulasi-data-suara')
            {{-- rekapitulasi data suara --}}

            @elseif ($is_dashboard)
            {{-- dashboard --}}
                @livewire('dashboard.dashboard')
            {{-- dashboard --}}
            @else
            <div class="container">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <div class="card-title text-center">
                            REKAP DATA SUARA
                        </div>
                        <div class="card-text">
                            @foreach ($rt as $r)
                            <hr>
                            <table class="table table-responsive table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>CALON RT. {{ $r->no_rt }}</th>
                                        {{-- <th>NO URUT</th>
                                        <th>PEROLEHAN SUARA</th>
                                        <th>CHART</th> --}}
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>
                                            <table class="table table-responsive table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>NAMA CALON</td>
                                                        <td>PEROLEHAN SUARA</td>
                                                        <td>NO URUT</td>
                                                        {{-- <td></td> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @dd($datas1[0]) --}}
                                                    @php
                                                        $number = 0;
                                                        $srt = []; // simpan no rt
                                                    @endphp
                                                    @foreach ($datas1 as $data1)
                                                        @if($number<$datas1->count())
                                                        @if($r->no_rt == $data1->keterangan)
                                                        <tr>
                                                            <td>{{ $data1->nama_calon ?? "-" }}</td>
                                                            <td>{{ $data1->no_urut ?? "-" }}</td>
                                                            <td>{{ $data1->haveDataSuara[0]->jumlah_suara ?? "-" }}</td>
                                                        </tr>
                                                        @php
                                                            $srt[] = $data1->keterangan;
                                                            $suara[] = $data1->haveDataSuara[0]->jumlah_suara ?? "0";
                                                            $namacalon[] = $data1->nama_calon;
                                                            $ar[] = $n ?? 0;
                                                            $n++;
                                                            $car[] = $this->rekapData($data1->id);
                                                            $jdaftar[] = $this->daftarPemilih($data1->keterangan);
                                                            $nos[] = $data1->keterangan;
                                                        @endphp
                                                        @php
                                                        $number++;
                                                        @endphp
                                                        @endif
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            @foreach ($datas1 as $data1)
                                            @if($data1->keterangan == $r->no_rt)
                                                @php
                                                    $sarray[] = $data1->keterangan;
                                                @endphp
                                                <div class="col col-7">
                                                    <canvas id="myChart{{ $data1->keterangan }}"></canvas>
                                                    {{-- @dd($n) --}}
                                                </div>
                                            @endif
                                            @endforeach
                                        </td>
                                        </tr>
                                </tbody>
                            </table>
                            @php
                                // $suara[] = $data->haveDataSuara[0]->jumlah_suara ?? "0";
                                // $namacalon[] = $data->nama_calon;
                                // $ar[] = $n ?? 0;
                                // $n++;
                                // $car[] = $this->rekapData($data->id);
                                // $jdaftar[] = $this->daftarPemilih($data->keterangan);
                                // $nos[] = $data->keterangan;
                            @endphp
                            @endforeach
                            <script>
                                let test = {{ Js::from($datas1) }}
                                // console.log(test)
                                let a = {{ Js::from($ar) }} // document id
                                let suaras = {{ Js::from($suara) }} // jumlah suara
                                let namacalon = {{ Js::from($namacalon) }} // nama calon
                                let no = {{ Js::from($nos) }} // no rt
                                let jf = {{ Js::from($jdaftar) }} // untuk perhitungan jumlah daftar
                                let ctx = []; // untuk mendefinisikan sebagai penanda chart ke-n otomatis
                                let b = []; // suara
                                let d = []; // nama calon
                                let jdaf = [] // jumlah daftar
                                let hasil = [] // ( -jumlah_pemilih ) + daftar pemilih = golput

                                // membersihkan data undefined
                                for(x=0;x<jf.length;x++)
                                {
                                    if(jf[x]!==null)
                                    {
                                        jdaf.push(jf[x].jumlah_daftar)
                                    } else {
                                        jdaf.push("0")
                                    }
                                }

                                // pemetaan suara dan nama calon
                                for(i=0; i<=suaras.length-1; i++)
                                {
                                    let c = [];
                                    let e = [];
                                    for(j=0;j<=suaras.length; j++)
                                    {
                                        if(no[i]===no[j])
                                        {

                                            c.push(suaras[j])
                                            e.push(namacalon[j])
                                        }
                                    }
                                    b[i]=[c] // data suara
                                    d[i]=[e] // data calon
                                }

                                // perhitungan hasil
                                for(let i=0;i<b.length;i++)
                                {
                                    let jum = 0
                                    for(let j=0;j<b[i][0].length;j++)
                                    {
                                        jum+=parseInt(b[i][0][j]);
                                    }
                                    hasil.push(jum)

                                }

                                // penambahan data golput
                                for(k=0;k<=jdaf.length-1;k++)
                                {
                                    b[k][0].push(jdaf[k] - hasil[k])
                                    d[k][0].push('golput')
                                }

                                let datart = {{ Js::from($sarray) }}// data rt untuk disandingkan ke chart
                                console.log(datart)
                                // chart
                                for(i=0;i<=a.length;i++)
                                {
                                    // cek data pemilih
                                    if(b[i][0][i]>0){
                                        ctx[i] = document.getElementById('myChart'+datart[i]);
                                        new Chart(ctx[i], {
                                          type: 'pie',
                                          data: {
                                            labels: d[i][0],
                                            datasets: [{
                                              label: '# of Votes',
                                              data: b[i][0],
                                              borderWidth: 1
                                            }]
                                          },
                                          options: {
                                            scales: {
                                              y: {
                                                beginAtZero: true
                                              }
                                            }
                                          }
                                        });
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
