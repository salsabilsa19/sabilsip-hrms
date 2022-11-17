<!-- START: Toggle Navbar -->
<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="bx bx-menu bx-sm"></i>
  </a>
</div>
<div class="d-flex justify-content-end align-items-center gap-3">
  <span class="ms-auto">Hello, {{Auth::user()->name}}</span>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-secondary">Logout</button>
  </form>
</div>
</nav>
<!-- END: Toggle Navbar -->