  <div>
      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-print-none">
          <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                  aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                  <a href="{{ route('dashboard') }}">
                      SIMENRU (CMS)
                  </a>
              </h1>
          </div>
      </header>
      <header class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="navbar">
                  <div class="container-xl">
                      <ul class="navbar-nav">
                          <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <x-nav-link icon="layout-dashboard" route="dashboard" name="Dashboard"></x-nav-link>
                          </li>
                          <li class="nav-item {{ request()->routeIs('ruang.index', 'ruang.create', 'ruang.edit') ? 'active' : '' }}">
                              <x-nav-link icon="folder-root" route="ruang.index" name="Ruang"></x-nav-link>
                          </li>
                          <li
                              class="nav-item {{ request()->routeIs('subruang.index', 'subruang.edit', 'subruang.create') ? 'active' : '' }}">
                              <x-nav-link icon="folder-dot" route="subruang.index" name="Sub Ruang"></x-nav-link>
                          </li>
                          <li
                              class="nav-item {{ request()->routeIs('transaksi.index', 'transaksi.create') ? 'active' : '' }}">
                              <x-nav-link icon="folder-dot" route="transaksi.index" name="Transaksi"></x-nav-link>
                          </li>
                          <li
                              class="nav-item {{ request()->routeIs('laporanRuang.index', 'laporanRuang.create') ? 'active' : '' }}">
                              <x-nav-link icon="book-check" route="laporanRuang.index"
                                  name="Laporan Ruang"></x-nav-link>
                          </li>
                          <li class="nav-item {{ request()->routeIs('settings.index') ? 'active' : '' }}">
                              <x-nav-link icon="cog" route="settings.index" name="Pengaturan"></x-nav-link>

                          </li>
                          <li class="nav-item">
                              @livewire('aplikasi.template.pages.auth.logout')
                          </li>
                      </ul>

                  </div>
              </div>
          </div>
      </header>
  </div>
