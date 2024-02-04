<div>
    <div class="container mt-5" wire:poll>
        @if ($is_create)
            <div class="card mt-5 shadow-sm rounded-3">
                <div class="card-body">
                    <form wire:submit.prevent="create">
                        <div class="row">
                            <label for="" class="col col-3 col-form-label">No RT</label>
                            <div class="col col-9">
                                <select class="form-control text-center" wire:model="keterangan" name="" id="">
                                    <option value="">Pilih</option>
                                    @foreach ($datarts as $data)
                                        <option value="{{ $data->no_rt }}">{{ $data->no_rt }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col col-3"></div>
                            <label for="" class="col col-9 col-form-label text-center">Jumlah Suara</label>
                        </div>
                        @php
                        // $datasuara = [];
                        $n = 1
                        @endphp
                        @foreach ($isdata as $data)
                            @php
                            $n++;
                            $this->idcalon[] = $data->no_urut;
                            @endphp

                            <div class="row mt-2">
                                <label for="" class="col col-3 col-form-label">No Urut {{ $data->no_urut }}</label>
                                <div class="col col-9">
                                    <input wire:model="datasuara.{{ $n }}" type="text" class="form-control">
                                </div>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        @else

        @endif
    </div>
</div>
