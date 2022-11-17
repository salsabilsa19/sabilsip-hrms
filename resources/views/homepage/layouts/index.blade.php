<!doctype html>
<html lang="en">

@include('homepage.layouts.partials.head')

<body>
	<!-- START: Navbar -->
	@include('homepage.layouts.partials.navbar')
	<!-- END: Navbar -->

  @yield('content')

  <!-- START: Footer -->
  @include('homepage.layouts.partials.footer')
  <!-- END: Footer -->
  
  <!-- START: Script -->
  @include('homepage.layouts.partials.scripts')

</body>
</html>