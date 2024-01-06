@section('ruangApp', 'Tambah Transaksi')
<div>
    <h3>Tambah Transaksi</h3>
    <div class="row row-cards">
        <div class="col-md-12">
            @if (session()->has('error'))
                <div class="alert alert-danger my-2">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required">Waktu Mulai</label>
                                        <input type="time" class="form-control" wire:model="start_time">
                                        @error('start_time')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required">Waktu Selesai</label>
                                        <input type="time" class="form-control" wire:model="end_time">
                                        @error('end_time')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label required">Ruang</label>
                                        <select class="form-control" wire:model="sub_ruang_id">
                                            <option value="">Pilih Ruang</option>
                                            @foreach ($subRuang as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_sub_ruang }}</option>
                                            @endforeach
                                        </select>
                                        @error('sub_ruang_id')
                                            <span class="error text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi Ruang</label>
                                        <textarea wire:model="deskripsi_ruang" cols="30" class="form-control" rows="2"></textarea>
                                        @error('deskripsi_ruang')
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
    </div>
    <button type="button" class="btn btn-primary btn-md mt-2" wire:click.prevent="saveForm()">Simpan Sub
        Ruang</button>
</div>
