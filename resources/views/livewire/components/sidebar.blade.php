<div>
    {{-- <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary"> --}}
        <div class="offcanvas-md offcanvas-end bg-primary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item @if($is_dashboard) bg-light text-dark @endif">
                <a wire:click="clickOne" class="nav-link @if($is_dashboard) text-primary @else text-light @endif d-flex align-items-center gap-2" aria-current="page" href="#">
                  <svg class="bi"><use xlink:href="#house-fill"/></svg>
                  DASHBOARD
                </a>
              </li>
              <li class="nav-item @if($is_datart) bg-light text-dark @endif">
                <a wire:click="clickTwo" class="nav-link @if($is_datart) text-primary @else text-light @endif d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                  DATA RT
                </a>
              </li>
              <li class="nav-item @if($is_nama_calonrt) bg-light text-dark @endif">
                <a wire:click="clickThree" class="nav-link @if($is_nama_calonrt) text-primary @else text-light @endif d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#cart"/></svg>
                  NAMA CALON
                </a>
              </li>
              <li class="nav-item @if($is_jumlah_daftar_pemilih) bg-light text-dark @endif">
                <a wire:click="clickFour" class="nav-link @if($is_jumlah_daftar_pemilih) text-primary @else text-light @endif d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#people"/></svg>
                  JUMLAH DAFTAR PEMILIH
                </a>
              </li>
              <li class="nav-item @if($is_data_suara) bg-light text-dark @endif">
                <a wire:click="clickFive" class="nav-link @if($is_data_suara) text-primary @else text-light @endif d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#graph-up"/></svg>
                  DATA SUARA
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#puzzle"/></svg>
                  REKAPITULASI DATA SUARA
                </a>
              </li> --}}
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
              <span class="text-light">CETAK</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                {{-- <svg class="bi"><use xlink:href="#plus-circle"/></svg> --}}
              </a>
            </h6>
            <ul class="nav flex-column mb-auto">
              <li class="nav-item @if($is_rekapitulasi_data_suara) bg-white @endif">
                <a wire:click="clickSix" class="nav-link @if($is_rekapitulasi_data_suara) text-primary @else text-light @endif  d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                  REKAPITULASI DATA SUARA
                </a>
              </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
              {{-- <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                  Settings
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link text-light d-flex align-items-center gap-2" href="#">
                  <svg class="bi"><use xlink:href="#door-closed"/></svg>
                  Sign out
                </a>
              </li>
            </ul>
          </div>
        </div>
    {{-- </div> --}}
</div>
