<div>
    <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark bg-primary fw-semibold fs-3 shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-4">
              <li class="nav-item">
                <a wire:click="clickOne" class="nav-link @if($is_dashboard) active @endif" aria-current="page" href="#"> <i class="bi bi-house-door-fill me-2 fs-2"></i>Dashboard</a>
              </li>
              <li class="nav-item">
                <a wire:click="clickTwo" class="nav-link @if($is_datart) active @endif" href="#"><i class="bi bi-person-lines-fill me-2 fs-2"></i>Data RT</a>
              </li>
              <li class="nav-item">
                <a wire:click="clickThree" class="nav-link @if($is_nama_calonrt) active @endif" href="#"><i class="bi bi-person-workspace me-2 fs-2"></i>Daftar Calon</a>
              </li>
              <li class="nav-item">
                <a wire:click="clickFour" class="nav-link @if($is_jumlah_daftar_pemilih) active @endif" href="#"><i class="bi bi-person-fill-check me-2 fs-2"></i>Daftar Pemilih</a>
              </li>
              <li class="nav-item">
                <a wire:click="clickFive" class="nav-link @if($is_data_suara) active @endif" href="#"><i class="bi bi-archive-fill me-2 fs-2"></i>Data Suara</a>
              </li>
              <li class="nav-item">
                <a wire:click="clickSix" class="nav-link @if($is_rekapitulasi_data_suara) active @endif" href="#"><i class="bi bi-file-earmark-spreadsheet-fill me-2 fs-2"></i>Rekapitulasi Data Suara</a>
              </li>
            </ul>
            <div class="d-flex ms-4 mb-2">
                <button class="btn text-white bg-primary fw-semibold" type="submit"><i class="bi bi-box-arrow-right me-2 fs-2"></i> Keluar</button>
              </div>
          </div>
        </div>
      </aside>
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h1 class="text-center text-primary mt-5">
                            APLIKASI QUICK QOUNT RT/RW KOMPLEK GRIYA PARAS JAYA
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
            @endif
            {{-- <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-md-12 col-lg-8"> --}}
                        {{-- <div class="card">
                            <div class="card-body">
                                <h3> Data diri</h3>

                            </div>
                        </div> --}}
                        
                    {{-- </div>

                </div>
            </div> --}}
        </div>
    </div>

</div>
