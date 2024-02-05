<div>
    <div class="container">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <div class="card-title text-center">
                    Rekap Data Suara
                </div>
                <div class="card-text">
                    @foreach ($datas as $data)
                    <hr>
                    <table class="table table-responsive table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>Nama Calon RT. {{ $data->keterangan }}</th>
                                <th>No Urut</th>
                                <th>Perolehan Suara</th>
                                <th>Chart</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>{{ $data->nama_calon ?? "-" }}</td>
                                <td>{{ $data->no_urut ?? "-" }}</td>
                                <td>{{ $data->haveDataSuara[0]->jumlah_suara ?? "-" }}</td>
                                {{-- PROBLEM CHART NOT ACTIVE --}}
                                <td>CHART</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
          <div id="chart-demo-pie" class="chart-lg"></div>
        </div>
      </div>
</div>
