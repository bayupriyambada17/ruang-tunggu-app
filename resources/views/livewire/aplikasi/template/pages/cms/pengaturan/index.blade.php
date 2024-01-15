@section('ruangApp', 'Pengaturan Aplikasi')
<div>
    @if (session()->has('message'))
        <div class="alert alert-success my-2">
            {{ session('message') }}
        </div>
    @endif
    <h3>Nama Aplikasi: {{ $nama_aplikasi }}</h3>
    <div class="row row-cards">
        <div class="col-md-12">
            <div class="row row-cards">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="text" label="Nama Aplikasi"
                                        wireModel="nama_aplikasi"></x-input-type>
                                    @error('nama_aplikasi')
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
        <button type="button" class="btn btn-primary btn-md" wire:click.prevent="updateForm()">Perbaharui Pengaturan</button>
        <x-a-link route="{{ route('ruang.index') }}" title="Kembali" bgColor="warning"></x-a-link>
    </div>

</div>
