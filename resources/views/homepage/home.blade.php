@extends('homepage.layouts.index')

@section('content')
	<!-- START: Header -->
  <section id="header">
    <!-- START: Header Content -->
    <div class="container">
      <div class="header">
        <div class="row h-100 overflow-hidden mt-0 mt-md-5 mt-lg-0">
          <div class="col-lg-5 align-self-center" data-aos="fade-right">
            <div class="d-flex flex-column gap-3">
              <div class="d-flex m-auto m-lg-0">
                <div class="sub-header text-center text-lg-start">
                  <span>Jelajahi Indonesia!</span>
                </div>
              </div>
              <h1 class="text-center text-lg-start">Temen Jelajah Kamu</h1>
              <span class="text-center text-lg-start">Hidup itu cuma sekali, tapi eksplor Indonesia bisa berkali-kali.
                Mau liburan ke satu dari ribuan pulau di Indonesia? Atau mau nambah destinasi wisata buat nemenin
                liburan kamu? Tenang aja, semua yang kamu butuhin ada disini.</span>
              <div class="d-lg-flex d-block">
                <div class="d-flex">
                  <button
                    class="btn btn-primary text-white text-sm px-4 py-2 me-lg-3 align-self-center me-auto ms-auto">
                    <span class="align-self-center me-3">Jelajahi</span>
                    <span class="material-icons material-icons-outlined align-self-center">
                      east</span>
                  </button>
                </div>
                <div class="d-flex">
                  <span class="align-self-center text-xs fst-italic text-secondary m-auto m-lg-0 mt-2 mt-lg-0">Butuh
                    bantuan?</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 align-self-center d-none d-lg-block mt-5 mt-lg-0" data-aos="zoom-in">
            <div class="d-flex">
              <img src="assets/images/design/header.png" alt="" width="600" class="img-fluid me-auto ms-auto me-0">
            </div>
          </div>

          <!-- START: Statistic -->
          <div class="row justify-content-center m-auto" data-aos="fade-right">
            <div class="col-12 col-lg-8">
              <div class="header-statistic w m-auto">
                <div class="d-flex flex-column">
                  <h5>55+</h5>
                  <span>Kota</span>
                </div>
                <div class="d-flex flex-column">
                  <h5>1.400+</h5>
                  <span>Hotel</span>
                </div>
                <div class="d-flex flex-column">
                  <h5>5.800+</h5>
                  <span>Wisata</span>
                </div>
                <div class="d-flex flex-column">
                  <h5>500+</h5>
                  <span>Kuliner</span>
                </div>
                <div class="d-flex flex-column">
                  <h5>100+</h5>
                  <span>Transportasi</span>
                </div>
              </div>
            </div>
          </div>
          <!-- END: Statistic -->

        </div>
      </div>
    </div>
    <!-- END: Header Content -->
  </section>
  <!-- END: Header -->

  <!-- START: Destination List -->
  <section id="destinationLista">
    <div class="bg-white">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex mt-5">
              <h3 class="header-section">Hal <span class="text-primary"> Menarik</span> Disekitar Kamu</h3>
            </div>
            <div class="d-flex mt-5 rounded overflow-hidden">
              <iframe style="width: 100%;" height="500" src="https://www.youtube.com/embed/5neokWSYYzw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Destination List -->

  <!-- START: Destination List -->
  <section id="destinationList">
    <div class="bg-white">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex mt-5">
              <h3 class="header-section">Temukan <span class="text-primary"> Beragam Destinasi Menarik</span></h3>
              <div class="d-flex ms-auto">
                <button class="btn btn-sm btn-light ms-auto me-3 d-flex" id="prevCarousel">
                  <span class="material-icons material-icons-outlined" style="line-height: unset;">chevron_left</span>
                  <span class="align-self-center">Prev</span>
                </button>
                <button class="btn btn-sm btn-light d-flex" id="nextCarousel">
                  <span class="align-self-center">Next</span>
                  <span class="material-icons material-icons-outlined" style="line-height: unset;">chevron_right</span>
                </button>
              </div>
            </div>
            <div class="d-flex mt-5 pt-3">
              <div class="owl-carousel">
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Hutan Alam</span>
                    </div>
                    <img src="assets/images/content/rajaampat.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 750.000</span>
                        <h5 class="card-title mt-3">Raja Ampat</h5>
                        <small>Papua</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_rajaampat.html" class="stretched-link"></a>
                </div>
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Prasejarah</span>
                    </div>
                    <img src="assets/images/content/borobudur.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 250.000</span>
                        <h5 class="card-title mt-3">Candi Borobudur</h5>
                        <small>Magelang</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_borobudur.html" class="stretched-link"></a>
                </div>
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Hutan</span>
                    </div>
                    <img src="assets/images/content/monkey.jpeg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 550.000</span>
                        <h5 class="card-title mt-3">Monkey Forest</h5>
                        <small>Bali</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_monkeyforest.html" class="stretched-link"></a>
                </div>
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Pantai</span>
                    </div>
                    <img src="assets/images/content/bajo.jpeg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 1.250.000</span>
                        <h5 class="card-title mt-3">Labuan Bajo</h5>
                        <small>Bali</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_labuanbajo.html" class="stretched-link"></a>
                </div>
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Pantai</span>
                    </div>
                    <img src="assets/images/content/wakatobi.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 1.550.000</span>
                        <h5 class="card-title mt-3">Taman Nasional Wakatobi</h5>
                        <small>Sulawesi Tenggara</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_wakatobi.html" class="stretched-link"></a>
                </div>
                <!-- Item -->
                <div class="card shadow h-100">
                  <div class="card-header">
                    <div class="destination-categories">
                      <span class="badge badge-white">Gunung</span>
                    </div>
                    <img src="assets/images/content/kawahijen.jpeg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <div class="d-flex flex-column">
                        <span class="destination-price">Rp. 450.000</span>
                        <h5 class="card-title mt-3">Kawah Ijen</h5>
                        <small>Jawa Timur</small>
                      </div>
                      <div class="destination-airlines">
                        <img src="assets/images/content/garuda.png" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <a href="detail_kawahijen.html" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Destination List -->

  <!-- START: Event List -->
  <section id="eventList">
    <div class="bg-white">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="d-flex mt-5">
              <h3 class="header-section">Ikuti Berbagai <span class="text-primary"> Event</span> Yang Kami Sediakan</h3>
              <a href="event_list.html" class="text-primary ms-auto text-decoration-none fst-italic">Lihat Semua</a>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="card border mt-5 overflow-hidden">
                  <div class="row">
                    <div class="col-lg-3">
                      <img src="assets/images/content/diving2.jpeg" alt="" class="img-fluid"
                        style="object-fit: cover; height: 100%;">
                    </div>
                    <div class="col-lg-9">
                      <div class="card-body">
                        <h6>Diving - Raja Ampat</h6>
                        <span class="text-sm">Bosan diving di Jawa dan Bali? Yuk, sesekali main ke Raja Ampat buat
                          berburu spot diving yang lebih keren dan menantang.</span>
                      </div>
                    </div>
                  </div>
                  <a href="detail-diving.html" class="stretched-link"></a>
                </div>
              </div>
              <div class="col-lg-6 mt-3 mt-lg-0">
                <div class="card border mt-5 overflow-hidden">
                  <div class="row">
                    <div class="col-lg-3">
                      <img src="assets/images/content/hiking1.jpeg" alt="" class="img-fluid"
                        style="object-fit: cover; height: 100%;">
                    </div>
                    <div class="col-lg-9">
                      <div class="card-body">
                        <h6>Hiking - Kawah Ijen</h6>
                        <span class="text-sm">Kawah Ijen merupakan wisata khas Banyuwangi yang cantik dan menawan.
                          Hiking di Ijen adalah pilihan yang tepat untuk melepas penat.</span>
                      </div>
                    </div>
                  </div>
                  <a href="detail-hiking.html" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Event List -->

  <!-- START: Partner -->
  <section id="partner">
    <div class="container my-5">
      <div class="card shadow px-5">
        <div class="card-body">
          <div class="d-flex mt-4">
            <h3 class="header-section">Lihat <span class="text-primary">Partner Perjalanan</span> Kamu</h3>
          </div>
          <div class="row mt-5 justify-content-center text-center pb-4">
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/airasia.png" alt="" width="80">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/citylink.png" alt="" width="80">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/garuda.png" alt="" width="80">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/wingsair.png" alt="" width="80">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/sriwijaya.png" alt="" width="120">
            </div>
            <div class="col-lg-2 col-sm-4 col-6 align-self-center">
              <img src="assets/images/content/merpati.png" alt="" width="120">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Partner -->
@endsection