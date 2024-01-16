@section('ruangApp', 'Dasbor')

<div>
    <div class="col-12">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Selamat Datang di SIMENRU APP - {{ auth()->user()->name }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat Peminjaman Hari ini</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengguna</th>
                                    <th>Sub Ruangan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $key => $t)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $t->user->name }}</td>
                                    <td> {{ $t->subRuang->nama_sub_ruang }}</td>
                                    <td> {{ $t->start_time }} - {{ $t->end_time }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        {{ $transaksi->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
