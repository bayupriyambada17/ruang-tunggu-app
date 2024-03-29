@section('ruangApp', 'Tambah Sub Ruang')
<div>
    <h3>Tambah Sub Ruang</h3>
    <div class="row row-cards">
        <div class="col-md-8">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="text" label="Sub Ruang"
                                        wireModel="no_ruang"></x-input-type>
                                    @error('no_ruang')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="text" label="Nama Sub Ruang"
                                        wireModel="nama_sub_ruang"></x-input-type>
                                    @error('nama_sub_ruang')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Grup Ruang</label>
                                    <select class="form-control" wire:model="ruang_id">
                                        @foreach ($semuaRuang as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
                                        @endforeach
                                    </select>
                                    @error('ruang_id')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <x-input-type required="true" type="text" label="Pabx"
                                            wireModel="pabx"></x-input-type>
                                        @error('pabx')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <x-input-type required="true" type="number" wireModel="kap"
                                            label="Kapasitas"></x-input-type>
                                        @error('kap')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <x-input-type required="true" type="number" wireModel="kap_ujian"
                                            label="Kapasitas Ujian"></x-input-type>
                                        @error('kap_ujian')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label required">Panjang Ruang</label>
                                        <input type="number" min="0" class="form-control"
                                            wire:model="ukuran_panjang">
                                        @error('ukuran_panjang')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label required">Lebar Ruang</label>
                                        <input type="number" min="0" class="form-control"
                                            wire:model="ukuran_lebar">
                                        @error('ukuran_lebar')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label required">Tinggi Ruang</label>
                                        <input type="number" min="0" class="form-control"
                                            wire:model="ukuran_tinggi">
                                        @error('ukuran_tinggi')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label required">Luas Ruang</label>
                                        <input type="number" min="0" class="form-control"
                                            wire:model="ukuran_luas">
                                        @error('ukuran_luas')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Fasilitas Ac</label>
                                    <select wire:model="fas_ac" class="form-control">
                                        <option value="0">Tidak Tersedia</option>
                                        <option value="1"> Tersedia</option>
                                    </select>
                                    @error('fas_ac')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Fasilitas Internet</label>
                                    <select wire:model="fas_inet" class="form-control">
                                        <option value="0">Tidak Tersedia</option>
                                        <option value="1"> Tersedia</option>
                                    </select>
                                    @error('fas_inet')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Fasilitas Komputer</label>
                                    <select wire:model="fas_komp" class="form-control">
                                        <option value="0">Tidak Tersedia</option>
                                        <option value="1"> Tersedia</option>
                                    </select>
                                    @error('fas_komp')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Fasilitas Lcd</label>
                                    <select wire:model="fas_lcd" class="form-control">
                                        <option value="0">Tidak Tersedia</option>
                                        <option value="1"> Tersedia</option>
                                    </select>
                                    @error('fas_lcd')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Fasilitas Audio</label>
                                    <select wire:model="fas_audio" class="form-control">
                                        <option value="0">Tidak Tersedia</option>
                                        <option value="1"> Tersedia</option>
                                    </select>
                                    @error('fas_audio')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Link CCTV</label>
                                    <input type="text" class="form-control" wire:model="link">
                                    @error('link')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-md" wire:click.prevent="saveForm()">Tambah Data
        Baru</button>
    <x-a-link route="{{ route('subruang.index') }}" title="Kembali" bgColor="warning"></x-a-link>

</div>
