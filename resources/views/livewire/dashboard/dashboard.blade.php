<div>
    <div class="container mt-5">
        <div class="row">
            <div class="col col-12 col-md-8 col-lg-4 mt-4">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <div class="text-center fw-bold text-primary">
                            Jumlah RT
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <div class="fs-3 fw-bold">
                                {{ $count }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-8 col-lg-4 mt-4">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <div class="text-center fw-bold text-primary">
                            Jumlah Calon RT
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <div class="fs-3 fw-bold">
                                {{ $calon ?? 0 }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-8 col-lg-4 mt-4">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <div class="text-center fw-bold text-primary">
                            Jumlah Daftar Pemilih
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <div class="fs-3 fw-bold">
                                {{ 0 }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
