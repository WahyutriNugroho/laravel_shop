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
            <li class="nav-item">
              <a href="/register.html" class="nav-link ">Sign Up</a>
            </li>
            </li>
            <li class="nav-item">
              <a href="/login.html" class="btn btn-success px-4  nav-link">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->