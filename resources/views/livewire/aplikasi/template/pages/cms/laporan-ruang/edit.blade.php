@section('ruangApp', 'Ubah Laporan Ruang')
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
                            <label class="form-label required">Catatan Sub Ruang</label>
                            <textarea class="form-control" wire:model="catatan_laporan" cols="30" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" wire:click.prevent="updateForm()">
                            Perbaharui Ruang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
