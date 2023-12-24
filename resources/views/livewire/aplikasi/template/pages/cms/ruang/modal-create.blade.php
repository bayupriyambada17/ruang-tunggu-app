{{-- modal --}}
<div class="modal modal-blur fade" wire:ignore.self id="ruangModal" tabindex="-1" style="display: none;" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form wire:submit.prevent="saveForm()">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Ruang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Ruang</label>
                        <input type="text" class="form-control" wire:model="nama_ruangan"
                            placeholder="Masukan nama ruang">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah Baru</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- modal --}}
