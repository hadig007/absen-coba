<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h4 class="text-white">{{ auth()->user()->name }}</h4>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(auth()->user()->level == "karyawan")
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('home') }}" class="nav-link active">
            <i class="fas fa-clock"></i>
              <p>
                Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('absenmasuk') }}" class="nav-link">
                <i class="fas fa-sign-in-alt"></i>
                  <p>Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('absenkeluar') }}" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                  <p>Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(auth()->user()->level == "admin")
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-clipboard"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-portrait"></i>
                  <p>Presens karyawan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-border-all"></i>
                  <p>Presensi keseluruhan</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ route('logout') }}" method="post" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>