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
                                Cari Ruangan
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row row-cards">
                        <div class="space-y">
                            @forelse ($semuaSubRuang as $subRuang)
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-auto">
                                            <div class="card-body">
                                                <div class="avatar avatar-md"
                                                    style="background-image: url(https://dummyimage.com/150x150/000000/ffffff&text=cctv.{{ $subRuang->no_ruang }})">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body ps-0">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3 class="mb-0"><a
                                                                href="#">{{ ucwords($subRuang->nama_sub_ruang) }}
                                                                ({{ $subRuang->no_ruang }})
                                                                - {{ $subRuang->ruang->nama_ruangan }}
                                                            </a></h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div
                                                            class="mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                                                            <div class="list-inline-item">
                                                                <span
                                                                    style="color: {{ $subRuang->fas_komp ? 'green' : 'red' }}; font-size:12px;">{{ $subRuang->fas_komp ? '✔' : '❌' }}</span>
                                                                AC
                                                            </div>
                                                            <div class="list-inline-item">
                                                                <span
                                                                    style="color: {{ $subRuang->fas_komp ? 'green' : 'red' }}; font-size:12px;">{{ $subRuang->fas_komp ? '✔' : '❌' }}</span>
                                                                Komp
                                                            </div>
                                                            <div class="list-inline-item">
                                                                <span
                                                                    style="color: {{ $subRuang->fas_lcd ? 'green' : 'red' }}; font-size:12px;">{{ $subRuang->fas_lcd ? '✔' : '❌' }}</span>

                                                                LCD
                                                            </div>
                                                            <div class="list-inline-item">
                                                                <span
                                                                    style="color: {{ $subRuang->fas_audio ? 'green' : 'red' }}; font-size:12px;">{{ $subRuang->fas_audio ? '✔' : '❌' }}</span>

                                                                Audio
                                                            </div>
                                                            <div class="list-inline-item">
                                                                <span
                                                                    style="color: {{ $subRuang->fas_inet ? 'green' : 'red' }}; font-size:12px;">{{ $subRuang->fas_inet ? '✔' : '❌' }}</span>

                                                                Inet
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md">
                                                        <div
                                                            class="mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                                                            <div class="list-inline-item">
                                                                Panjang: {{ $subRuang->ukuran_panjang }}
                                                            </div>
                                                            <div class="list-inline-item">

                                                            </div>
                                                            <div class="list-inline-item">

                                                                LCD
                                                            </div>
                                                            <div class="list-inline-item">

                                                                Audio
                                                            </div>
                                                            <div class="list-inline-item">

                                                                Inet
                                                            </div>
                                                        </div>

                                                    </div>
                                                    {{-- <div class="col-md-auto">
                                                        <div class="mt-3 badges">
                                                            <a href="#"
                                                                class="badge badge-outline text-muted border fw-normal badge-pill">PHP</a>
                                                            <a href="#"
                                                                class="badge badge-outline text-muted border fw-normal badge-pill">Laravel</a>
                                                            <a href="#"
                                                                class="badge badge-outline text-muted border fw-normal badge-pill">CSS</a>
                                                            <a href="#"
                                                                class="badge badge-outline text-muted border fw-normal badge-pill">Vue</a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center">Data dengan
                                            {{ $ruang_id ? 'Ruang ' . $ruang_id : 'Lokasi Ruang yang Dipilih' }}
                                            tidak terdapat sub ruang</h3>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
