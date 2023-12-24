@section('ruangApp', 'Ubah Ruang')
<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Nama Ruangan</h3>
                <div class="input-icon">
                    <input type="text" class="form-control" wire:model="nama_ruangan">
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" wire:click.prevent="updateForm()">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
