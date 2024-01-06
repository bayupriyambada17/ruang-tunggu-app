@section('ruangApp', 'Laporan Ruang')

<div>
    <a href="{{ route('laporanRuang.create') }}" type="button" class="btn btn-md btn-primary mb-2">Tambah
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
                <h3 class="card-title">Laporan Ruang</h3>
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
                            <th>Sub Ruang</th>
                            <th>Catatan Ruang</th>
                            <th>Tanggal Transaksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($semuaLaporanRuang as $key => $laporan)
                            <tr>
                                <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                <td>
                                    <span class="text-muted">{{ $laporan->subRuang->nama_sub_ruang }}</span>
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $laporan->catatan_laporan }}
                                </td>
                                <td>
                                    <span class="text-muted"></span>
                                    {{ $laporan->tanggal_laporan }}
                                </td>
                                <td class="justify-content-end">
                                    <div class="btn-list">
                                        <a href="{{ route('laporanRuang.edit', $laporan->id) }}" class="btn">
                                            Edit
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
                                <td colspan="4" class="text-center">Tidak ada data ruang</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <ul class="pagination m-0 ms-auto">
                    {{ $semuaLaporanRuang->links() }}
                </ul>
            </div>
        </div>
    </div>

</div>
