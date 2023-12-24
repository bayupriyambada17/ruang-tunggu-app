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
                      Ruang Tunggu (CMS)
                  </a>
              </h1>
          </div>
      </header>
      <header class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
              <div class="navbar">
                  <div class="container-xl">
                      <ul class="navbar-nav">
                          <li class="nav-item {{ request()->routeIs('dashboard') ? "active": "" }}">
                              <a class="nav-link " href="{{ route('dashboard') }}">
                                  <i data-lucide="layout-dashboard" width="15" height="15" style="margin-right: 2px;"></i>
                                  </span>
                                  <span class="nav-link-title">
                                      Dasbor
                                  </span>
                              </a>
                          </li>
                          <li class="nav-item {{ request()->routeIs('ruang.index') ? "active": "" }}"" >
                              <a class="nav-link" href="{{ route('ruang.index') }}">
                                  <i data-lucide="folder-root" width="15" height="15" style="margin-right: 2px;"></i>
                                  </span>
                                  <span class="nav-link-title">
                                      Ruang
                                  </span>
                              </a>
                          </li>
                          <li class="nav-item {{ request()->routeIs('subruang.index', 'subruang.edit', 'subruang.create') ? "active": "" }}">
                              <a class="nav-link" href="{{ route('subruang.index') }}">
                                  <i data-lucide="folder-dot" width="15" height="15" style="margin-right: 2px;"></i>
                                  </span>
                                  <span class="nav-link-title">
                                      Sub Ruang
                                  </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('dashboard') }}">
                                  <i data-lucide="cog" width="15" height="15" style="margin-right: 2px;"></i>
                                  </span>
                                  <span class="nav-link-title">
                                      Pengaturan
                                  </span>
                              </a>
                          </li>
                          <li class="nav-item">
                              @livewire('aplikasi.template.pages.auth.logout')
                          </li>
                          {{-- <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                                  data-bs-auto-close="outside" role="button" aria-expanded="false">
                                  <span
                                      class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                          fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                          <path d="M15 15l3.35 3.35" />
                                          <path d="M9 15l-3.35 3.35" />
                                          <path d="M5.65 5.65l3.35 3.35" />
                                          <path d="M18.35 5.65l-3.35 3.35" />
                                      </svg>
                                  </span>
                                  <span class="nav-link-title">
                                      Help
                                  </span>
                              </a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                                      Documentation
                                  </a>
                                  <a class="dropdown-item" href="./changelog.html">
                                      Changelog
                                  </a>
                                  <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank"
                                      rel="noopener">
                                      Source code
                                  </a>
                                  <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm"
                                      target="_blank" rel="noopener">
                                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1"
                                          width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                          stroke="currentColor" fill="none" stroke-linecap="round"
                                          stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                          <path
                                              d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                      </svg>
                                      Sponsor project!
                                  </a>
                              </div>
                          </li> --}}
                      </ul>

                  </div>
              </div>
          </div>
      </header>
  </div>
