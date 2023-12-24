@section('ruangApp', 'Sub Ruang')

<div>
    <a href="{{ route('subruang.create') }}" type="button" class="btn btn-md btn-primary mb-2">Tambah
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
                <h3 class="card-title">Sub Ruang</h3>
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
                <table class="table card-table table-vcenter table-bordered datatable">
                    <thead>
                        <tr>
                            <th rowspan="2" class="w-1">No.</th>
                            <th colspan="3" class="text-center">No Ruang</th>
                            <th colspan="3" class="text-center">Kapasitas</th>
                            <th colspan="5" class="text-center">Fasilitas</th>
                            <th colspan="4" class="text-center">Ukuran Ruang</th>
                            <th rowspan="2" class="text-center">Live CCTV</th>
                            <th rowspan="2" class="text-center">Aksi</th>
                        </tr>
                        <tr>
                            <th class="text-center">No. Ruang</th>
                            <th class="text-center">Sub Ruang</th>
                            <th class="text-center">Grup Ruang</th>
                            <th class="text-center">Pabx</th>
                            <th class="text-center">Ruang</th>
                            <th class="text-center">Ujian</th>
                            <th class="text-center">Ac</th>
                            <th class="text-center">Komp</th>
                            <th class="text-center">Lcd</th>
                            <th class="text-center">Aud</th>
                            <th class="text-center">inet</th>
                            <th class="text-center">P</th>
                            <th class="text-center">L</th>
                            <th class="text-center">T</th>
                            <th class="text-center">Luas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subRuang as $key => $ruang)
                            <tr>
                                <td class="text-center">
                                    <span class="text-muted">{{ $key + 1 }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->no_ruang }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->nama_sub_ruang }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->ruang->nama_ruangan }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->pabx }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->kap }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->kap_ujian }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->fas_ac ? '✔': '❌' }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->fas_komp ? '✔': '❌' }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->fas_lcd ? '✔': '❌' }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->fas_audio ? '✔': '❌' }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->fas_inet ? '✔': '❌' }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->ukuran_panjang }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->ukuran_lebar }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->ukuran_tinggi }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted">{{ $ruang->ukuran_luas }}</span>
                                </td>
                                <td class="text-center">
                                    <button
                                        class="btn btn-outline-primary btn-md">Cek</button>
                                </td>
                                <td class="justify-content-end">
                                    <div class="btn-list">
                                        <a href="{{ route('subruang.edit', $ruang->nama_sub_ruang) }}" class="btn btn-outline-warning btn-md">
                                            Ubah
                                        </a>
                                        @if ($konfirmasiHapus)
                                            <button wire:click.prevent="destroy({{ $ruang->id }})"
                                                class="btn btn-outline-warning btn-md">Yakin Hapus?</button>
                                        @else
                                            <button wire:click.prevent="confirmDeleting({{ $ruang->id }})"
                                                class="btn btn-outline-danger btn-md">Hapus</button>
                                        @endif

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
                    {{ $subRuang->links() }}
                </ul>
            </div>
        </div>
    </div>

</div>
