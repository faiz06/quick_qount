<div>
    <div class="container mt-5" wire:poll>
        @if ($is_create)
            <div class="fs-2">Tambah Data</div>
            <div class="card">
                <div class="card-body">
                    <form action="" wire:submit.prevent="create">
                        <div class="row mb-4">
                            <label for="alamat" class="col col-sm-2 col-form-label">NO RT</label>
                            <div class="col col-sm-10">
                                <select wire:model="no_rt" class="text-center form-control" id="">
                                    <option value="">PILIH</option>
                                    @foreach ($norts as $nort)
                                        <option value="{{ $nort->no_rt }}">{{ $nort->no_rt }}</option>
                                    @endforeach
                                    {{-- <option value="perempuan">PEREMPUAN</option> --}}
                                </select>
                            </div>
                        </div>
                        @error('no_rt')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="row mb-4">
                            <label for="alamat" class="col col-sm-2 col-form-label">JUMLAH DAFTAR PEMILIH</label>
                            <div class="col col-sm-10">
                                <input wire:model="jumlah_daftar" name="alamat" type="text" class="form-control">
                            </div>
                        </div>
                        @error('jumlah_daftar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <div wire:click="onCreate" class="btn btn-secondary">Batal</div>
                        </div>
                    </form>
                </div>
            </div>
        @elseif ($is_update)
            <div class="fs-2">Edit Data</div>
            <div class="card">
                <div class="card-body">
                    <form action="" wire:submit.prevent="update">
                        <div class="row mb-4 mt-2">
                            <label for="no_rt" class="col col-sm-2 col-form-label">NAMA CALON</label>
                            <div class="col col-sm-10">
                                <input wire:model="nama_calon" name="no_rt" type="text" class="form-control">
                            </div>
                        </div>
                        @error('nama_calon')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="row mb-4">
                            <label for="alamat" class="col col-sm-2 col-form-label">NO. URUT</label>
                            <div class="col col-sm-10">
                                <input wire:model="no_urut" name="alamat" type="text" class="form-control">
                            </div>
                        </div>
                        @error('no_urut')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="row mb-4">
                            <label for="alamat" class="col col-sm-2 col-form-label">JENIS KELAMIN</label>
                            <div class="col col-sm-10">
                                <select wire:model="jenis_kelamin" class="text-center form-control" id="">
                                    <option value="">PILIH</option>
                                    <option value="laki-laki">LAKI-LAKI</option>
                                    <option value="perempuan">PEREMPUAN</option>
                                </select>
                            </div>
                        </div>
                        @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="row mb-4">
                            <label for="alamat" class="col col-sm-2 col-form-label">KETERANGAN</label>
                            <div class="col col-sm-10">
                                <input wire:model="keterangan" name="alamat" type="text" class="form-control">
                            </div>
                        </div>
                        @error('keterangan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <div wire:click="onUpdate('{{ $this->id }}')" class="btn btn-secondary">Batal</div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="card mt-5">
                <div class="card-header">
                    <div class="text-end">
                        <div wire:click="onCreate" class="btn btn-primary btn-sm">Tambah</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>NO RT</th>
                                    <th>JUMLAH DAFTAR PEMILIH</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($datas as $data)
                                    <tr>
                                        <td>{{ $data->no_rt ?? '-' }}</td>
                                        <td>{{ $data->jumlah_daftar ?? '-' }}</td>
                                        <td>
                                            <div wire:click="onUpdate('{{ $data->id }}')" class="btn btn-warning btn-sm">Edit</div>
                                            <div wire:click="delete('{{ $data->id }}')" class="btn btn-danger btn-sm">Delete</div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"><div class="text-center">Data Kosong</div></td>
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
