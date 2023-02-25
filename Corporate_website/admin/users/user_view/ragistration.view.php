<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

  <!-- Prevent the demo from appearing in search engines -->
  <meta name="robots" content="noindex">

  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/vendor-fontawesome-free.css">
  <link rel="stylesheet" href="../../css/vendor-material-icons.css">

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

<body class="layout-login-centered-boxed">

  <div class="layout-login-centered-boxed__form card">
    <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
      <a href="index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
        <span>FlowDash</span>
      </a>
      <p class="m-0">Create an account with FlowDash</p>
    </div>

    <div class="page-separator">
      <div class="page-separator__text">Fill</div>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="text-label" for="name">Name:</label>
        <div class="input-group input-group-merge">
          <input id="name_2" name="name" type="text" class="form-control form-control-prepended" placeholder="John Doe">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-user"></span>
            </div>
          </div>
        </div>
      </div>
      <?php
      if(isset($error['nameError'])){
        printf('<div class="text-danger">%s</div>', $error['nameError']);
      }
      ?>
      <div class="form-group">
        <label class="text-label" for="email">Email Address:</label>
        <div class="input-group input-group-merge">
          <input id="email" name="email" type="email" class="form-control form-control-prepended" placeholder="john@doe.com">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-envelope"></span>
            </div>
          </div>
        </div>
      </div>
      <?php
        if(isset($error['emailError'])){
          printf('<div class="text-danger">%s</div>', $error['emailError']);
        }
      ?>
      <div class="form-group">
        <label class="text-label" for="password">Password:</label>
        <div class="input-group input-group-merge">
          <input id="password" name="password" type="password" class="form-control form-control-prepended" placeholder="Enter your password">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="far fa-key"></span>
            </div>
          </div>
        </div>
      </div>
      <?php
        if(isset($error['passError'])){
          printf('<div class="text-danger">%s</div>', $error['passError']);
        }
      ?>
       <div class="form-group">
        <label class="text-label" for="Photo">Photo:</label>
        <div class="input-group input-group-merge">
          <input id="Photo" type="file" name="photo" class="form-control form-control-prepended">
        </div>
      </div>
      <?php
        if(isset($error['imageError'])){
          printf('<div class="text-danger">%s</div>', $error['imageError']);
        }
      ?>

      <div class="form-group text-center">
        <button class="btn btn-primary mb-2" name="submit" type="submit">Create Account</button><br>
        <a class="text-body text-underline" href="login.php">Have an account? Login</a>
      </div>
    </form>
  </div>

  <!-- jQuery -->
  <script src="assets/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/vendor/popper.min.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>

  <!-- Perfect Scrollbar -->
  <script src="assets/vendor/perfect-scrollbar.min.js"></script>

  <!-- DOM Factory -->
  <script src="assets/vendor/dom-factory.js"></script>

  <!-- MDK -->
  <script src="assets/vendor/material-design-kit.js"></script>

  <!-- App -->
  <script src="assets/js/toggle-check-all.js"></script>
  <script src="assets/js/check-selected-row.js"></script>
  <script src="assets/js/dropdown.js"></script>
  <script src="assets/js/sidebar-mini.js"></script>
  <script src="assets/js/app.js"></script>

  <!-- App Settings (safe to remove) -->
  <script src="assets/js/app-settings.js"></script>

</body>

</html>