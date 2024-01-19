@section('ruangApp', 'Harian')

<div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-label">Waktu Harian</div>
                            <div class="mb-2">
                                <input type="date" class="form-control" wire:model.live="tanggal_filter">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No.</th>
                                            <th>Waktu</th>
                                            <th>Pengguna</th>
                                            <th>Sub Ruang</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Deskripsi Ruang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($semuaTransaksi as $key => $transaksi)
                                            <tr>
                                                <td><span class="text-muted">{{ $key + 1 }}</span></td>
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
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data transaksi</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{ $semuaTransaksi->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
