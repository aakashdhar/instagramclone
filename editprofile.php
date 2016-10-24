<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style>
  body{
    padding-top: 70px;
  }
</style>

  <?php
    $id = $_REQUEST['id'];
    if (isset($id)) {
        $sql = "SELECT * FROM `users` WHERE `user_id` = '$id'";
        $result = mysqli_query($con,$sql);
    }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Edit Profile</h3>
          </div>
          <?php while($row = mysqli_fetch_object($result)): ?>
          <div class="panel-body">
            <form action="_uploadediteddata.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <!-- <label for="fullname" class="control-label">Fullname:</label> -->
                <input type="text" class="form-control" value="<?= $row -> fullname;?>" id="fullname" name="fullname" placeholder="Enter your Fullname" required>
                <!-- <p class="help-block"><small class="text-muted">Leave it if you want to keep it the same</small></p> -->
              </div>
              <div class="form-group">
                <!-- <label for="email" class="control-label">Email:</label> -->
                <input type="email" class="form-control" value="<?= $row -> email;?>" id="email" name="email" placeholder="Enter your Email" required>
                <!-- <p class="help-block"><small class="text-muted">Leave it if you want to keep it the same</small></p> -->
              </div>
              <div class="form-group">
                <!-- <label for="username" class="control-label">Username:</label> -->
                <input type="text" class="form-control" value="<?= $row -> username;?>" id="username" name="username" placeholder="Enter your Username" required>
                <!-- <p class="help-block"><small class="text-muted">Leave it if you want to keep it the same</small></p> -->
              </div>
              <div class="form-group">
                <label for="photo" class="control-label">Profile Pic:</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
              </div>
              <div class="form-group">
                <label for="bio" class="control-label">Bio:</label>
                <textarea name="bio" id="bio" rows="5" cols="40" class="form-control" placeholder="Enter your Bio"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="form-control btn btn-success" value="Update your instagram" id="username" name="update">
              </div>
              <input type="hidden" name="photourl" value="<?= $row -> profile_url; ?>">
            </form>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>

<?php include 'includes/footer.php'; ?>
