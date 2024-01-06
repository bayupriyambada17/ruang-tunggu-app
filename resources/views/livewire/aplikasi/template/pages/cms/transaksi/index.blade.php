@section('ruangApp', 'Transaksi')

<div>
    <a href="{{ route('transaksi.create') }}" type="button" class="btn btn-md btn-primary mb-2">Tambah
        Data</a>
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
                <h3 class="card-title">Transaksi Ruang</h3>
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
                            <input type="date" class="form-control" wire:model.live="tanggalTransaksi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter datatable">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Kode Transaksi</th>
                            <th>Waktu</th>
                            <th>Pengguna</th>
                            <th>Sub Ruang</th>
                            <th>Tanggal Transaksi</th>
                            <th>Deskripsi Ruang</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($semuaTransaksi as $key => $transaksi)
                            <tr>
                                <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                <td>
                                    <span class="text-muted">{{ $transaksi->transaksi_kode }}</span>
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $transaksi->start_time }} - {{ $transaksi->end_time }}
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $transaksi->user->name }}
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $transaksi->subRuang->nama_sub_ruang }}
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $transaksi->tanggal_transaksi }}
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $transaksi->deskripsi_ruang }}
                                </td>
                                <td class="justify-content-end">
                                    <div class="btn-list">
                                        <a href="{{ route('transaksi.edit', $transaksi->transaksi_kode) }}" class="btn">
                                            Ubah
                                        </a>
                                        {{-- @if ($konfirmasiHapus)
                                            <button wire:click.prevent="destroy({{ $ruang->id }})"
                                                class="btn btn-outline-warning btn-md">Yakin Hapus?</button>
                                        @else
                                            <button wire:click.prevent="confirmDeleting({{ $ruang->id }})"
                                                class="btn btn-outline-danger btn-md">Hapus</button>
                                        @endif --}}

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data transaksi</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <ul class="pagination m-0 ms-auto">
                    {{ $semuaTransaksi->links() }}
                </ul>
            </div>
        </div>
    </div>

</div>
