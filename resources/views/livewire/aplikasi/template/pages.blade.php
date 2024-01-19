@section('ruangApp', 'SIMENRU')

<div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-md-3">
                    <form wire:submit.prevent="filteringRuang" autocomplete="off" novalidate class="sticky-top">
                        <div class="form-label">Lokasi Ruang</div>
                        <div class="mb-4">
                            <select class="form-select" wire:model="ruang_id">
                                <option value="">Semua Lokasi Ruang</option>
                                @foreach ($semuaRuang as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_ruangan }}
                                        ({{ $item->subs_ruang_count }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary w-100">
                                Cari
                                Ruangan
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="19" class="text-center">Ruang:
                                            {{ $ruang_id ? $selectedRuangName : 'Semua Lokasi Ruang' }} </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" class="text-center">#</th>
                                        <th rowspan="2" class="text-center">Live Cctv</th>
                                        <th colspan="3" class="text-center">Lokasi Ruang</th>
                                        <th rowspan="2" class="text-center">pabx</th>
                                        <th rowspan="2" class="text-center">Kap</th>
                                        <th rowspan="2" class="text-center">Kap Ujian</th>
                                        <th colspan="5" class="text-center">Fasilitas Ruang</th>
                                        <th colspan="4" class="text-center">Ukuran Ruang</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Sub Ruang</th>
                                        <th class="text-center">Ruang</th>
                                        <th class="text-center">Ac</th>
                                        <th class="text-center">Aud</th>
                                        <th class="text-center">Komp</th>
                                        <th class="text-center">Lcd</th>
                                        <th class="text-center">Inet</th>
                                        <th class="text-center">P</th>
                                        <th class="text-center">L</th>
                                        <th class="text-center">T</th>
                                        <th class="text-center">Luas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($semuaSubRuang as $key => $item)
                                        <tr>
                                            <td class="text-secondary text-center">
                                                {{ $key + 1 }}
                                            </td>
                                            <td>
                                                <Button class="btn btn-md btn-info">Live</Button>
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->no_ruang }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->nama_sub_ruang }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->ruang->nama_ruangan }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->pabx }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->kap }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->kap_ujian }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->fas_ac == 1 ? '✔' : '❌' }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->fas_audio == 1 ? '✔' : '❌' }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->fas_komp == 1 ? '✔' : '❌' }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->fas_lcd == 1 ? '✔' : '❌' }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->fas_inet == 1 ? '✔' : '❌' }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->ukuran_panjang }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->ukuran_lebar }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->ukuran_tinggi }}
                                            </td>
                                            <td class="text-secondary text-center">
                                                {{ $item->ukuran_luas }}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="14" class="text-center">Tidak ada group ruang: {{ $selectedRuangName }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
