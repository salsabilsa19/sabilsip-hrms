<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  @include('admin.layouts.partials.head')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        
        @include('admin.layouts.partials.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          
        	@include('admin.layouts.partials.sidebar-toggler')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            
            <div class="container">
              <div class="bg-white p-5 mt-3 rounded shadow-sm">
                @yield('content')
              </div>
            </div>
            <!-- / Content -->

            @include('admin.layouts.partials.footer')

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('admin.layouts.partials.scripts')
    @yield('scripts')
  </body>
</html>
