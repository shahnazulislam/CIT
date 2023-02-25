<?php
include_once "../layouts/header.php";
?>

<div class="container-fluid page__heading-container mt-5">
  <div class="page__heading">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active" aria-current="page">Services</li>
      </ol>
    </nav>
    <h1 class="m-0">Services</h1>
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
        <p><strong class="headings-color">Services</strong></p>
      </div>
      <div class="col-lg-8 card-form__body card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter your banner title ..">
          </div>
          <?php
          if (isset($error['titleError'])) {
            printf('<p class="text-danger">%s</p>', $error['titleError']);
          }
          ?>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" id="description" rows="5" placeholder="Type description"></textarea>
          </div>
          <?php
          if (isset($error['disError'])) {
            printf('<p class="text-danger">%s</p>', $error['disError']);
          }
          ?>
          <div class="form-group">
            <label for="box_icon">Box Icon Name</label>
            <input type="text" name="box_icon" class="form-control" id="box_icon" placeholder="Icon Name ..">
            <p class="text-muted"><span class="font-weight-bold">Note:</span>Please give an Icon name to this <a class="text-decoration-none" target="_blank" href="https://boxicons.com/">Link here..</a></p>
          </div>
          <?php
          if (isset($error['biconError'])) {
            printf('<p class="text-danger">%s</p>', $error['biconError']);
          }
          ?>
          <div class="form-group">
            <label for="box_color">Box color</label>
            <select name="box_color" class="form-control">
              <option disabled selected>please select option</option>
              <option value="icon-box-pink">Pink</option>
              <option value="icon-box-cayan">Cayan</option>
              <option value="icon-box-green">Green</option>
              <option value="icon-box-pink">Pink</option>
            </select>
          </div>
          <?php
          if (isset($error['boxcolorError'])) {
            printf('<p class="text-danger">%s</p>', $error['boxcolorError']);
          }
          ?>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid page__container">
  <div class="card">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Discription</th>
          <th>Icon</th>
          <th>Box color</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>

<?php
include_once "../layouts/footer.php";
?>