<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location: users/login.php');
}
function site_url()
{

  $protocol = explode('/', $_SERVER['SERVER_PROTOCOL']);
  $path     = explode('/', $_SERVER['PHP_SELF']);
  return strtolower($protocol[0]) . '://' . $_SERVER['HTTP_HOST'] . '/' . $path[1] . '/' . $path[2];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <!-- Prevent the demo from appearing in search engines -->
  <meta name="robots" content="noindex">

  <!-- Perfect Scrollbar -->
  <link type="text/css" href="<?= site_url() ?>/admin/css/perfect-scrollbar.css" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="<?= site_url() ?>/admin/css/app.css" rel="stylesheet">

  <!-- Material Design Icons -->
  <link type="text/css" href="<?= site_url() ?>/admin/css/vendor-material-icons.css" rel="stylesheet">

  <!-- Font Awesome FREE Icons -->
  <link type="text/css" href="<?= site_url() ?>/admin/css/vendor-fontawesome-free.css" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-133433427-1');
  </script>

</head>

<body class="layout-default">

  <div class="preloader"></div>

  <!-- Header Layout -->
  <div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
      <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
          <div class="container-fluid p-0">

            <!-- Navbar toggler -->

            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button" data-toggle="sidebar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Brand -->
            <a href="index.html" class="navbar-brand ">

              <span>flowdash</span>
            </a>

            <form class="search-form d-none d-sm-flex flex" action="index.html">
              <button class="btn" type="submit"><i class="material-icons">search</i></button>
              <input type="text" class="form-control" placeholder="Search">
            </form>

            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
              <li class="nav-item dropdown">
                <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                  <div class="dropdown-item d-flex align-items-center py-2">
                    <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                    <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                  </div>
                  <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                    <div class="py-2">

                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                        </div>
                        <div class="flex">
                          <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                          <small class="text-muted">1 minute ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          New user <a href="#">Peter Parker</a> signed up.<br>
                          <small class="text-muted">1 hour ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title rounded-circle">JD</span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                          <div>Hey, how are you? What about our next meeting</div>
                          <small class="text-muted">2 minutes ago</small>
                        </div>
                      </div>

                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                        </div>
                        <div class="flex">
                          <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                          <small class="text-muted">1 minute ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          New user <a href="#">Peter Parker</a> signed up.<br>
                          <small class="text-muted">1 hour ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title rounded-circle">JD</span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                          <div>Hey, how are you? What about our next meeting</div>
                          <small class="text-muted">2 minutes ago</small>
                        </div>
                      </div>

                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                          </div>
                        </div>
                        <div class="flex">
                          <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                          <small class="text-muted">1 minute ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          New user <a href="#">Peter Parker</a> signed up.<br>
                          <small class="text-muted">1 hour ago</small>
                        </div>
                      </div>
                      <div class="dropdown-item d-flex">
                        <div class="mr-3">
                          <a href="#">
                            <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                              <span class="avatar-title rounded-circle">JD</span>
                            </div>
                          </a>
                        </div>
                        <div class="flex">
                          <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                          <div>Hey, how are you? What about our next meeting</div>
                          <small class="text-muted">2 minutes ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                </div>
              </li>
            </ul>

            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
              <li class="nav-item dropdown">
                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                  <span class="mr-1 d-flex-inline">
                    <span class="text-light"><?php echo $_SESSION['user']['name']; ?></span>
                  </span>
                  <img src="<?= site_url() ?>/admin/upload/profile/<?php echo $_SESSION['user']['photo']; ?>" class="rounded-circle" width="32" alt="Frontted">
                </a>
                <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-item-text dropdown-item-text--lh">
                    <div><strong><?= $_SESSION['user']['name']; ?></strong></div>
                    <div class="text-muted"><?= $_SESSION['user']['email']; ?></div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item active" href="index.html"><i class="material-icons">dvr</i> Dashboard</a>
                  <a class="dropdown-item" href="profile.html"><i class="material-icons">account_circle</i> My profile</a>
                  <a class="dropdown-item" href="edit-account.html"><i class="material-icons">edit</i> Edit account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="users/logout.php"><i class="material-icons">exit_to_app</i> Logout</a>
                </div>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </div>
    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">

      <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">