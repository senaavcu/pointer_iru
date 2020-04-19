<?php include'admin_pan.php' ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Pointer İRÜ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/<?php echo $user_admin ?>.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user_admin ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mevcut Yazılar</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="yazi_ekle.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                        <p>Yeni Yazı Ekle</p>
                </a>
                  </li>
                  <li class="nav-item">

                      <a href="logout.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                              <p>Çıkış Yap</p>
                      </a>


                    </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
