<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style>
  body{
    padding-top: 70px;
  }
</style>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading text-center"><h2>Upload insta Pics</h2></div>
          <div class="panel-body">
            <form class="" action="_uploadinstapic.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="photo" class="control-label">Upload Pic:</label>
                  <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="form-group">
                  <label for="title" class="control-label">Title:</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title of your Insta pic">
                </div>
                <div class="form-group">
                  <label for="description" class="control-label">Desciption:</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Enter Description of your Insta pic" rows="8" cols="40"></textarea>
                </div>
                .<div class="form-group">
                  <input type="submit" class="form-control btn btn-success" id="submit" name="submit" value="Gram it!!!">
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'includes/footer.php'; ?>
