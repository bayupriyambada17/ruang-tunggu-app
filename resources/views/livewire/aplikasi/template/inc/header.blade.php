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
                              <x-nav-link route="home" name="Beranda" icon="home"></x-nav-link>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                  data-bs-auto-close="outside" role="button" aria-expanded="false">
                                  <span class="nav-link-title">
                                      Agenda
                                  </span>
                              </a>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ route('pages.harian') }}">
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
                          <x-nav-link route="member.login" name="Masuk Simenru" icon="log-in"></x-nav-link>
                      </ul>

                  </div>
              </div>
          </div>
      </header>
  </div>
