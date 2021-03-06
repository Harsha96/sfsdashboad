  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.html" class="brand-link">
    <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

    style="opacity:100;margin-left:0px; border-radius:0;">

    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="img/img_avatar.png" style="border-radius:50%;"alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Overview

            </p>
          </a>
        <li class="nav-item">
          <a href="product.php" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Manage Products

            </p>
          </a>
        </li>


        <li class="nav-item has-treeview">
          <a href="contact.php" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Manage Details
            </p>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="services.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact_details.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Details</p>
                </a>
              </li>
            </ul>
          </a>




        </li>
        <li class="nav-item has-treeview">
          <a href="cat.php" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Manage Categories

            </p>
          </a>
              </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Configuration

            </p>
          </a>

        </li>



        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Analytics

            </p>
          </a>

        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Settings

            </p>
          </a>

        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
