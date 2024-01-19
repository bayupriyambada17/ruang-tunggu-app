<div>
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="{{ route('home') }}">
                    SIMENRU
                </a>
            </h1>
        </div>
    </header>
    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i data-lucide="home" width="15" height="15" style="margin-right: 2px;"></i>
                                </span>
                                <span class="nav-link-title">
                                    Beranda
                                </span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('pages.harian') ? 'active' : '' }} dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                role="button" aria-expanded="false">
                                <span class="nav-link-title">
                                    Agenda
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item {{ request()->routeIs('pages.harian') ? 'active' : '' }}"
                                    href="{{ route('pages.harian') }}">
                                    Harian
                                </a>
                                <a class="dropdown-item" href="#">
                                    Ruangan
                                </a>
                                <a class="dropdown-item" href="#">
                                    Kuliahan
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('member.login') }}">
                                <i data-lucide="log-in" width="15" height="15" style="margin-right: 2px;"></i>
                                </span>
                                <span class="nav-link-title">
                                    Masuk Simenru
                                </span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>
</div>
