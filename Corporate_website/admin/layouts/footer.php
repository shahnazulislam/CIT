<!-- // END drawer-layout__content -->
</div>
<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
  <div class="mdk-drawer__content">
    <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
      <div class="sidebar-heading">Menu</div>
      <ul class="sidebar-menu">
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="<?= site_url() ?>/admin/index.php">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
            <span class="sidebar-menu-text">Dashboards</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="<?= site_url()?>/admin/hero/index.php">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
            <span class="sidebar-menu-text">Banners</span>
          </a>
        </li>
        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="<?= site_url()?>/admin/services/index.php">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
            <span class="sidebar-menu-text">Services</span>
          </a>
        </li>

        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" href="<?= site_url()?>/admin/why_us/index.php">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
            <span class="sidebar-menu-text">Why Us</span>
          </a>
        </li>

        <li class="sidebar-menu-item">
          <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
            <span class="sidebar-menu-text">Apps</span>
            <span class="ml-auto sidebar-menu-toggle-icon"></span>
          </a>
          <ul class="sidebar-submenu collapse" id="apps_menu">
            <li class="sidebar-menu-item">
              <a class="sidebar-menu-button" href="app-activities.html">
                <span class="sidebar-menu-text">Activities</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
        <a href="#" class="flex d-flex align-items-center text-underline-0 text-body">
          <span class="avatar avatar-sm mr-2">
            <img src="<?= site_url()?>/admin/upload/profile/<?php echo $_SESSION['user']['photo']; ?>" alt="avatar" class="avatar-img rounded-circle">
          </span>
          <span class="flex d-flex flex-column">
            <strong><?= $_SESSION['user']['name']; ?></strong>
            <small class="text-muted text-uppercase">Site Manager</small>
          </span>
        </a>
        <div class="dropdown ml-auto">
          <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-item-text dropdown-item-text--lh">
              <div><strong><?= $_SESSION['user']['name'] ?></strong></div>
              <div><?= $_SESSION['user']['email'] ?></div>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item active" href="index.html">Dashboard</a>
            <a class="dropdown-item" href="profile.html">My profile</a>
            <a class="dropdown-item" href="edit-account.html">Edit account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../users/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- // END drawer-layout -->

</div>
<!-- // END header-layout__content -->

</div>
<!-- // END header-layout -->

<!-- App Settings FAB -->
<div id="app-settings">
  <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="<?= site_url() ?>/admin/js/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="<?= site_url() ?>/admin/js/popper.min.js"></script>
<script src="<?= site_url() ?>/admin/js/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="<?= site_url() ?>/admin/js/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="<?= site_url() ?>/admin/js/dom-factory.js"></script>

<!-- MDK -->
<script src="<?= site_url() ?>/admin/js/material-design-kit.js"></script>

<!-- App -->
<script src="<?= site_url() ?>/admin/js/sidebar-mini.js"></script>
<script src="<?= site_url() ?>/admin/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="<?= site_url() ?>/admin/js/app-settings.js"></script>

<!-- Global Settings -->
<script src="js/settings.js"></script>

</body>

</html>