@section('ruangApp', 'Tambah Ruang')
<div>
    <h3>Tambah Ruang</h3>
    <div class="row row-cards">
        <div class="col-md-12">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="text" label="Ruang"
                                        wireModel="nama_ruangan"></x-input-type>
                                    @error('nama_ruangan')
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
    <div class="my-2">
        <button type="button" class="btn btn-primary btn-md" wire:click.prevent="saveForm()">Tambah Data
            Baru</button>
        <x-a-link route="{{ route('ruang.index') }}" title="Kembali" bgColor="warning"></x-a-link>
    </div>

</div>
