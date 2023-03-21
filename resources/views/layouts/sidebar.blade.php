<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('AdminLTE')}}/pages/examples/login.html" class="brand-link" style="background-color: rgba(0, 217, 255, 0.541)">
      <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text ">
          <b>SI</b>MANIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Girindra Fajar</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">DATA MASTER</li>
          <li class="nav-item">
            <a href="/pegawai" class="nav-link">
              <i class="fas fa-fw fa-user"></i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/anggota" class="nav-link">
              <i class="fas fa-fw fa-user"></i>
              <p>Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/buku" class="nav-link">
              <i class="fas fa-fw  fa-book"></i>
              <p>Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Data Entri
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Data Buku
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/buku" class="nav-link">
                      <i class="far fa-circle nav-icon text-danger"></i>
                      <p>Data Buku</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/buku/create" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Entri Buku</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Data Peminjaman
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/peminjaman" class="nav-link">
                      <i class="far fa-circle nav-icon text-danger"></i>
                      <p>Master Peminjaman</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/peminjaman/create" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Entri Peminjaman</p>
                    </a>
                  </li>
                </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Data Pengembalian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/pengembalian" class="nav-link">
                          <i class="far fa-circle nav-icon text-danger"></i>
                          <p>Master Pengembalian</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/pengembalian/create" class="nav-link">
                          <i class="far fa-circle nav-icon text-warning"></i>
                          <p>Entri Pengembalian</p>
                        </a>
                      </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Denda
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-danger"></i>
                          <p>Data Pembayaran Denda</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-warning"></i>
                          <p>Data Keterlambatan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon text-primary"></i>
                          <p>Entri Denda</p>
                        </a>
                      </li>
                    </ul>
                </li>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>