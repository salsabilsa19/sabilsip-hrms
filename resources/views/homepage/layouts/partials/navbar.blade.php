<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" data-aos="fade-down">
          <img src="assets/images/logo/sg2.png" alt="" class="img-fluid" width="150">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="50">
              <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
            </li>
            <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="100">
              <a class="nav-link" href="destination_list.html">Destinasi</a>
            </li>
            <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="150">
              <a class="nav-link" href="event_list.html">Event</a>
            </li>
            <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="250">
              <a class="nav-link" href="contact-us.pKami"></a>
            </li>
            <li class="nav-item" data-aos="zoom-in-down" data-aos-delay="300">
              <div class="d-flex gap-3">
                @auth
                  <span>Hi, {{Auth::user()->name}}</span>
                @endauth
                @guest
                  <a class="btn btn-light" href="{{ route('login') }}">Masuk</a>
                  <a class="btn btn-primary text-white" href="{{ route('register') }}">Daftar</a>
                @endguest
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>