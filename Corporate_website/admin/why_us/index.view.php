<?php
include_once "../layouts/header.php";
?>

<div class="container-fluid page__heading-container mt-5">
  <div class="page__heading">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active" aria-current="page">Why US</li>
      </ol>
    </nav>
    <h1 class="m-0">Why Us</h1>
  </div>
</div>

<div class="container-fluid page__container">
  <?php
  if (isset($success)) {
    printf("<div class='alert alert-success'>%s</div>", $success);
  }
  if (isset($errors)) {
    printf('<div class="alert alert-danger">%s</div>', $errors);
  }
  ?>
  <div class="card card-form">
    <div class="row no-gutters">
      <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Update why us</strong></p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="icon_one">Icon One</label>
            <input type="text" name="icon_one" class="form-control" id="icon_one" placeholder="Icon Name ..">
            <p class="text-muted"><span class="font-weight-bold">Note:</span>Please give an Icon name to this <a class="text-decoration-none" target="_blank" href="https://boxicons.com/">Link here..</a></p>
          </div>
          <?php
          if (isset($error['biconError'])) {
            printf('<p class="text-danger">%s</p>', $error['biconError']);
          }
          ?>
          <div class="form-group">
            <label for="title_one">Title One:</label>
            <input type="text" class="form-control" name="title_one" id="title_one" placeholder="Enter your  title one..">
          </div>
          <?php
          if (isset($error['titleError'])) {
            printf('<p class="text-danger">%s</p>', $error['titleError']);
          }
          ?>
          <div class="form-group">
            <label for="description_one">Description One:</label>
            <textarea name="description_one" class="form-control" id="description_one" rows="5" placeholder="Type description"></textarea>
          </div>
          <?php
          if (isset($error['disError'])) {
            printf('<p class="text-danger">%s</p>', $error['disError']);
          }
          ?>
          <div class="form-group">
            <label for="icon_two">Icon Two</label>
            <input type="text" name="icon_two" class="form-control" id="icon_two" placeholder="Icon Name ..">
            <p class="text-muted"><span class="font-weight-bold">Note:</span>Please give an Icon name to this <a class="text-decoration-none" target="_blank" href="https://boxicons.com/">Link here..</a></p>
          </div>
          <?php
          if (isset($error['biconError'])) {
            printf('<p class="text-danger">%s</p>', $error['biconError']);
          }
          ?>
          <div class="form-group">
            <label for="title_two">Title Two:</label>
            <input type="text" class="form-control" name="title_two" id="title_two" placeholder="Enter your banner title ..">
          </div>
          <?php
          if (isset($error['titleError'])) {
            printf('<p class="text-danger">%s</p>', $error['titleError']);
          }
          ?>
          <div class="form-group">
            <label for="description_two">Description Two:</label>
            <textarea name="description_two" class="form-control" id="description_two" rows="5" placeholder="Type description two"></textarea>
          </div>
          <?php
          if (isset($error['disError'])) {
            printf('<p class="text-danger">%s</p>', $error['disError']);
          }
          ?>
          <div class="form-group">
            <label for="title">Banner:</label>
            <input type="file" class="form-control p-1" name="banner">
          </div>
          <?php
          if (isset($error['bannerError'])) {
            printf('<p class="text-danger">%s</p>', $error['bannerError']);
          }
          ?>
          <div class="form-group">
            <label for="video_link">Video link:</label>
            <input type="text" class="form-control" name="video_link" id="title" placeholder="Enter your banner title ..">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include_once "../layouts/footer.php";
?>