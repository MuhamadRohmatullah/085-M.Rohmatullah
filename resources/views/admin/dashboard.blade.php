@extends("partial.layouts.admin")

@section("title", "Admin")

@section("content")

@include("user.post_form")

@include("user.post_form")

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{ asset('assets/images/ball.png') }}" alt="" style="width : 70px">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboards">Dashboards</div>
            </a>
            <ul class="menu-sub">
              
              <li class="menu-item active">
                <a href="/dashboard" class="menu-link">
                  <div data-i18n="Analytics">Analytics</div>
                </a>
              </li>

              <li class="menu-item active">
                <a href="/user" class="menu-link">
                  <div data-i18n="Analytics">User</div>
                </a>
              </li>

              <li class="menu-item active">
                <a href="/watch" class="menu-link">
                  <div data-i18n="Analytics">Watch</div>
                </a>
              </li>
             
            </ul>
          </li>

          <!-- Layouts -->
          <
          <!-- Front Pages -->
          

         
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
              <div data-i18n="Authentications">Account</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="/logout" class="menu-link" target="_blank">
                  <div data-i18n="Basic">Logout</div>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
               
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
               
              </li>

              <!-- User -->
               
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-warning">Welcome  Admin🎉</h5>
                        <p class="mb-4">
                         <span class="fw-medium"></span> You have Accessed to all activity !
                        </p>

                        <a href="javascript:;" class="btn btn-sm btn-outline-warning">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img
                          src="{{asset('assets/asset/img/illustrations/man-with-laptop-light.png')}}"
                          height="140"
                          alt="View Badge User"
                          data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              
              @if(request()->is('dashboard'))
                    @include('admin.main')
              @elseif(request()->is('user'))
                    @include('admin.user_tables')
              @elseif(request()->is('watch'))
                    @include('admin.watch_tables')
              @endif
             
          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                <div class="text-center pt-5">
            
                </div>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>

@endsection