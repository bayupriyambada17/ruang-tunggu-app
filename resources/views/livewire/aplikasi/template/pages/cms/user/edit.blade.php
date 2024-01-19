@section('ruangApp', 'Ubah User')
<div>
    <h3>Tambah User</h3>
    <div class="row row-cards">
        <div class="col-md-12">
            <div class="row row-cards">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="text" label="Nama User"
                                        wireModel="name"></x-input-type>
                                    @error('name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label required">Email User</label>
                                    <input type="text" disabled class="form-control" wire:model="email" readonly/>
                                    @error('email')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-input-type required="true" type="password" label="Password User"
                                        wireModel="password"></x-input-type>
                                    @error('password')
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
        <x-a-link route="{{ route('user.index') }}" title="Kembali" bgColor="warning"></x-a-link>
    </div>

</div>
