<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="{{ asset('assets/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jquery-mousewheel-main/jquery.mousewheel.min.js') }}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    $(document).ready(function () {
      $(".owl-stage").addClass("d-flex");
    });
    AOS.init();
    $('.owl-carousel').owlCarousel({
      stagePadding: 15,
      margin: 30,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        }
      }
    });
    $('.owl-carousel').on('mousewheel', '.owl-stage', function (e) {
      if (e.deltaY > 0) {
        $('.owl-carousel').trigger('next.owl');
      } else {
        $('.owl-carousel').trigger('prev.owl');
      }
      e.preventDefault();
    });

    $('#nextCarousel').on('click', function () {
      $('.owl-carousel').trigger('next.owl');
    });
    $('#prevCarousel').on('click', function () {
      $('.owl-carousel').trigger('prev.owl');
    });

  </script>