<?php
include_once "../layouts/header.php";
?>

<div class="container-fluid page__heading-container mt-5">
  <div class="page__heading">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active" aria-current="page">banners</li>
      </ol>
    </nav>
    <h1 class="m-0">Banners</h1>
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
        <p><strong class="headings-color">Add banner</strong></p>
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
            <label for="discription">Discription:</label>
            <textarea name="discription" class="form-control" id="discription" rows="5" placeholder="Type discription"></textarea>
          </div>
          <?php
          if (isset($error['disError'])) {
            printf('<p class="text-danger">%s</p>', $error['disError']);
          }
          ?>
          <div class="form-group">
            <label for="btn_text">Button text</label>
            <input type="text" name="btn_txt" class="form-control" id="btn_txt" placeholder="Button text ..">
          </div>
          <?php
          if (isset($error['btxtError'])) {
            printf('<p class="text-danger">%s</p>', $error['btxtError']);
          }
          ?>
          <div class="form-group">
            <label for="btn_url">Button Url</label>
            <input type="text" name="btn_url" class="form-control" id="btn_url" placeholder="Button Url..">
          </div>
          <?php
          if (isset($error['burlError'])) {
            printf('<p class="text-danger">%s</p>', $error['burlError']);
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
          <th>Button text</th>
          <th>Button url</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($banners as $banner){
        ?>
        <tr>
          <td><?= $banner['id']?></td>
          <td><?= $banner['title']?></td>
          <td><?= substr($banner['description_text'], 0, 50 ) ."..."?></td>
          <td><?= $banner['btn_text']?></td>
          <td><?= $banner['btn_url']?></td>
          <td>
            <a href="#" class="btn bg-primary">View</a>
            <a href="#" class="btn bg-secondary">Edit</a>
            <a href="#" class="btn bg-danger">Delete</a>
          </td>
          </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php

include_once "../layouts/footer.php";

?>