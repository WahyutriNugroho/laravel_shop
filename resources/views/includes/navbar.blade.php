 <!-- navbar -->
   <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
          <img src="/images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{route('categories')}}" class="nav-link ">Cataegories</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link ">Reward</a>
            </li>
            @guest
            <li class="nav-item">
              <a href="{{route('register')}}" class="nav-link ">Sign Up</a>
            </li>
            </li>
            <li class="nav-item">
              <a href="{{route('login')}}" class="btn btn-success px-4  nav-link">Sign In</a>
            </li>
            @endguest
          </ul>
          @auth
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
                      Hi, {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('dashboard')}}"
                        >Dashboard</a
                      >
                      <a class="dropdown-item" href="{{route('dashboard-my-account')}}"
                        >Settings</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</a>
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
          @endauth
        </div>
      </div>
    </nav>
    <!-- end navbar -->