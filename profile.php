<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style media="screen">
  body{
    padding-top: 70px;
  }
</style>
  <?php
    $id  = $_SESSION['userid'];
    $visitid = $_REQUEST['id'];
    $sql = "SELECT * FROM `users` WHERE `user_id` = '$id'";
    $result = mysqli_query($con,$sql);
  ?>
  <?php
    $sql1 = "SELECT * FROM `posts` WHERE `user_id` = '$id'";
    $result1 = mysqli_query($con,$sql1);
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php while($row = mysqli_fetch_object($result)): ?>
        <div class="row well">
          <div class="col-md-4">
            <div class="col-md-12 sidebar">
              <img src=<?php echo ((!empty($row -> profile_url))? "$row->profile_url" : "http://placehold.it/200x200" ) ?> height="200" width="200" alt="" class="img-circle"/>
            </div>
          </div>
          <div class="col-md-8">
            <div class="col-md-12">
              <div class="col-md-6"><h2><?= $row -> username;?></h2></div>
              <div class="col-md-5">
                <h3>
                  <a href="editprofile.php?id=<?= $row -> user_id; ?>"class="btn btn-primary">Edit Profile</a>
                  <!-- <?php //if (isset($visitid)): ?> -->
                    <a href="#" class="btn btn-success">Follow</a>
                  <!-- <?php //endif; ?> -->
                </h3>
              </div>
              <div class="row">
                <div class="col-md-3"><p class="profiledetails"><b>208</b> Posts</p></div>
                <div class="col-md-4"><p class="profiledetails"><b>160</b> Followers</p></div>
                <div class="col-md-4"><p class="profiledetails"><b>300</b> Following</p></div>
              </div>
              <div class="row">
                <div class="col-md-4"><p class="profiledetails "><b><?= $row -> fullname;?></b></p></div>
                <div class="col-md-8"><p class="profiledetails"><?= $row -> bio;?></p></div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
        <div class="text-center">
          <h3>Your Uploaded Insta's</h3>
        </div><br>
        <div class="row masonry-container">
          <?php while($row1 = mysqli_fetch_object($result1)): ?>
          <div class="col-sm-6 col-md-6 item">
            <div class="thumbnail">
              <a href="viewpic.php?id=<?= $row1 -> post_id; ?>" target="_blank"><img src="<?= $row1 -> image_url; ?>" alt=""></a>
              <div class="caption">
                <h4 class="text-center text-primary"><?= $row1 -> title ?></h4>
                <p><?=$row1 -> description; ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>




<?php include 'includes/footer.php'; ?>
