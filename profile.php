<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style media="screen">
  body{
    padding-top: 70px;
  }
</style>
  <?php
    $id  = $_SESSION['userid'];
    $sql = "SELECT * FROM `users` WHERE `user_id` = '$id'";
    $result = mysqli_query($con,$sql);
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
              <div class="col-md-5"><h3><a href="editprofile.php?id=<?= $row -> user_id; ?>"class="btn btn-primary">Edit Profile</a></h3></div>
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
        <div class="row,masonry-container">
          <div class="text-center">
            <h3>Your Uploaded Insta's</h3>
          </div><br>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <img src="css/images/cover.jpg" alt="...">
              <div class="caption">
                <h4 class="text-center text-primary">Thumbnail label</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <a href="#"><img src="css/images/cover.jpg" alt="..."></a>
              <div class="caption">
                <h4 class="text-center text-primary">Thumbnail label</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <img src="css/images/cover.jpg" alt="...">
              <div class="caption">
                <h4 class="text-center text-primary">Thumbnail label</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <img src="css/images/cover.jpg" alt="...">
              <div class="caption">
                <h4 class="text-center">Thumbnail label</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <img src="css/images/cover.jpg" alt="...">
              <div class="caption">
                <h4 class="text-center text-primary">Thumbnail label</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <div class="thumbnail">
              <img src="css/images/cover.jpg" alt="...">
              <div class="caption">
                <h4 class="text-center text-primary">Thumbnail label</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php include 'includes/footer.php'; ?>
