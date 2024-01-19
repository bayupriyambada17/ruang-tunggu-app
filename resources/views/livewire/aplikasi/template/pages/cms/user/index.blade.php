@section('ruangApp', 'User')

<div>
    <div class="mb-2">
        <x-a-link route="{{ route('user.create') }}" bgColor="primary" title="Tambah"></x-a-link>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success my-2">
            {{ session('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger my-2">
            {{ session('error') }}
        </div>
    @endif
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                        Tampilkan
                        <div class="mx-2 d-inline-block">
                            <input type="text" wire:model.live="countData" class="form-control form-control-sm">
                        </div>
                        Data
                    </div>
                    <div class="ms-auto text-muted">
                        Pencarian:
                        <div class="ms-2 d-inline-block">
                            <input type="search" class="form-control form-control-sm" wire:model.live="search">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter datatable">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Verifikasi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($userPeminjam as $key => $user)
                            <tr>
                                <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                <td>
                                    <span class="text-muted">{{ $user->name }}</span>
                                </td>
                                <td>
                                    <span class="text-muted">{{ $user->email }}</span>
                                </td>
                                <td>
                                    <span class="text-muted">
                                        {{ $user->verifikasi_date }}
                                    </span>
                                </td>
                                <td class="justify-content-end">
                                    <div class="btn-list">
                                        <x-a-link route="{{ route('user.edit', $user->email) }}"
                                            bgColor="outline-warning" title="Ubah"></x-a-link>
                                        @if ($konfirmasiHapus)
                                            <button wire:click.prevent="destroy({{ $user->id }})"
                                                class="btn btn-outline-warning btn-md">Yakin Hapus?</button>
                                        @else
                                            <button wire:click.prevent="confirmDeleting({{ $user->id }})"
                                                class="btn btn-outline-danger btn-md">Hapus</button>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <ul class="pagination m-0 ms-auto">
                    {{ $userPeminjam->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>
