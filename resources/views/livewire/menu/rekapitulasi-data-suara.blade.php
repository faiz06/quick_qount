<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center">
                    REKAP DATA SUARA
                </div>
                <div class="card-text">
                    @foreach ($datas as $data)
                    <hr>
                    <table class="table table-responsive table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>NAMA CALON RT. {{ $data->keterangan }}</th>
                                <th>NO URUT</th>
                                <th>PEROLEHAN SUARA</th>
                                <th>CHART</th>
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
</div>
