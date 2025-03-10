<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  {{-- <a href="../../index3.html" class="brand-link">
    <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a> --}}

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src= "{{asset('assets/img/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          {{-- <li class="nav-item menu-open"> --}}
            <a href="{{route('dashboard')}} " class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                {{__('message.dashboard')}}
                {{-- <i class="fas fa-angle-left right"></i> --}}
              </p>
            </a>
          </ul>
      </nav>
      @cannot('isApprenant')


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               {{-- <li class="nav-item menu-open"> --}}
                   <a href="{{route("apprenant.index")}}" class="nav-link active">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        {{__('message.title1')}}
                        {{-- <i class="fas fa-angle-left right"></i> --}}
              </p>
            </a>
        </ul>
    </nav>
        @endcannot

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
  
            {{-- <li class="nav-item menu-open"> --}}
              <a href="{{route('groupe.index')}} " class="nav-link active">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  {{__('message.gestion_de_groupe')}}
                  {{-- Groupe --}}
                  {{-- <i class="fas fa-angle-left right"></i> --}}
                </p>
              </a>
            </ul>
        </nav>
        {{-- @cannot('isApprenant') --}}

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
