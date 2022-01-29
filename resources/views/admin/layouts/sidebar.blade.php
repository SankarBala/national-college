 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/logo.png')}}" alt="NC" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light">National College</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt=""> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block"> <i class="fa fa-lock text-white text-lg mr-2"></i> Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Notice
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">0</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.notice.create')}}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add new</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.notice.index')}}" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>All notice</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Events
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">0</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.event.create')}}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add new</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.event.index')}}" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>All event</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          {{-- <li class="nav-header">Extra</li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>