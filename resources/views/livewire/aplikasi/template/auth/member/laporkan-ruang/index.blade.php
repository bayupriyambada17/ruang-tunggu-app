@section('ruangApp', 'Laporan Ruang')
<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label required">Sub Ruang</label>
                            <select class="form-control" wire:model="sub_ruang_id">
                                <option value="">Pilihan Sub Ruang</option>
                                @foreach ($subRuang as $ruang)
                                <option value="{{ $ruang->id }}"> {{ $ruang->nama_sub_ruang }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label required">Barang Rusak</label>
                            <select class="form-control" wire:model="type">
                                <option value="">Pilih Barang</option>
                                <option value="tidak-rusak">Tidak Rusak</option>
                                <option value="ac">Ac</option>
                                <option value="komp">Komputer</option>
                                <option value="lcd">Lcd</option>
                                <option value="audio">Audio</option>
                                <option value="inet">Internet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label required">Berikan ulasan kerusakan ruang</label>
                            <textarea class="form-control" wire:model="catatan_laporan" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" wire:click.prevent="saveForm()">
                            Kirimkan Laporan Ruang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
