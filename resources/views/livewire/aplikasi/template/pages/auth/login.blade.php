<div>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        Ruang Tunggu
                        </a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Masuk dengan akun anda, dengan benar!
                </h2>
                <form wire:submit.prevent="login" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        <input type="email" wire:model="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Kata Sandi
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" wire:model="password" class="form-control" placeholder="Your password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Masuk Aplikasi</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-color:black">
                {{-- style="background-image: url(./static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)"> --}}
            </div>
        </div>
    </div>
</div>
