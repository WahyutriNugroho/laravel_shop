<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/dashboard-store-logo.svg" class="my-4" alt="" />
          </div>
          <div class="list-group list-group-flash">
            <a
              href="{{route('dashboard')}}"
              class="list-group-item list-group-item-action "
              >Dashoard</a
            >
            <a
              href="{{route('dashboard-products')}}"
              class="list-group-item list-group-item-action"
              >My Products</a
            >
            <a
              href="{{route('dashboard-transaction')}}"
              class="list-group-item list-group-item-action"
              >Transaction</a
            >
            <a
              href="{{route('dashboard-store-setting')}}"
              class="list-group-item list-group-item-action"
              >Settings</a
            >
            <a
              href="{{route('dashboard-my-account')}}"
              class="list-group-item list-group-item-action"
              >My Account</a
            >
            <a href="{{route('home')}}" class="list-group-item list-group-item-action"
              >Sign Out</a
            >
          </div>
        </div>
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
            data-aos="fade-down"
            aria-label="Navbar"
          >
            <div class="container-fluid">
              <button
                class="btn btn-secondary d-md-none mr-auto mr2"
                id="menu-toggle"
              >
                &laquo;Menu
              </button>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSlideContent"
                aria-controls="navbarSlideContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSlideContent">
                <!-- End Navigation -->

                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link"
                      href="#"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                        style="width: 50px"
                      />
                      Hi, Angga
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/dashboard.html"
                        >Dashboard</a
                      >
                      <a class="dropdown-item" href="/dashboard-account.html"
                        >Settings</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-inline-block mt-2" href="#">
                      <img src="/images/icon-cart-filled.svg" alt="" />
                      <div class="card-badge">3</div>
                    </a>
                  </li>
                </ul>

                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a class="nav-link" href="#"> Hi, Angga </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-inline-block" href="#"> Cart </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          {{-- Content --}}
        @yield('content')
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="script/navbar-scroll.js"></script>
    @stack('addon-script')
  </body>
</html>
