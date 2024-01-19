@section('ruangApp', 'Dasbor')

<div>
    <div class="col-12">
        @if (session()->has('message'))
            <div class="alert alert-success my-2">
                {{ session('message') }}
            </div>
        @endif
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Selamat Datang di SIMENRU APP - {{ auth()->user()->name }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row row-cards">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Peminjaman Anda</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pengguna</th>
                                            <th>Sub Ruangan</th>
                                            <th>Keterangan peminjam</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($transaksi as $key => $t)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $t->user->name }}</td>
                                                <td> {{ $t->subRuang->nama_sub_ruang }}</td>
                                                <td> {{ $t->deskripsi_ruang }}</td>
                                                <td> {{ $t->start_time }} - {{ $t->end_time }}</td>

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
                                {{ $transaksi->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Laporan Anda</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Laporan</th>
                                            <th>Tipe</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laporan as $key => $t)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $t->catatan_laporan }}</td>
                                                <td>{{ ucfirst($t->type) }}</td>
                                                <td>{{ $t->tanggal_laporan }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer d-flex align-items-center">
                                {{ $laporan->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
