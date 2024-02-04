<div>
    <div class="container mt-5" wire:poll>
        @if ($create)
            <div class="fs-2">Tambah Data</div>
            <div class="card">
                <div class="card-body">
                    <form action="" wire:submit.prevent="save">
                        <div class="row mb-4 mt-2">
                            <label for="no_rt" class="col col-sm-2 col-form-label">NO. RT</label>
                            <div class="col col-sm-10">
                                <input wire:model="no_rt" name="no_rt" type="text" class="form-control">
                            </div>
                            @error('no_rt')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="alamat" class="col col-sm-2 col-form-label">ALAMAT</label>
                            <div class="col col-sm-10">
                                <input wire:model="alamat" name="alamat" type="text" class="form-control">
                            </div>
                            @error('alamat')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <div wire:click="isCreate" class="btn btn-secondary">Batal</div>
                        </div>
                    </form>
                </div>
            </div>
        @elseif ($edit)
        <div class="fs-2">Edit Data</div>
        <div class="card">
            <div class="card-body">
                <form action="" wire:submit.prevent="editData">
                    <div class="row mb-4 mt-2">
                        <label for="no_rt" class="col col-sm-2 col-form-label">NO. RT</label>
                        <div class="col col-sm-10">
                            <input wire:model="no_rt" name="no_rt" type="text" class="form-control">
                        </div>
                        @error('no_rt')
                                <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="alamat" class="col col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col col-sm-10">
                            <input wire:model="alamat" name="alamat" type="text" class="form-control">
                        </div>
                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <div wire:click="isEdit('{{ $this->id }}')" class="btn btn-secondary">Batal</div>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-header">
                <div class="text-end">
                    <div wire:click="isCreate" class="btn btn-primary btn-sm">Tambah</div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border">
                        <thead class="table-dark">
                            <tr>
                                <th>No. RT</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->no_rt }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        <div wire:click="isEdit('{{ $data->id }}')" class="btn btn-warning btn-sm">Edit</div>
                                        <div wire:click="delete('{{ $data->id }}')" class="btn btn-danger btn-sm">Delete</div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <div class="text-center">Data Kosong</div>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
