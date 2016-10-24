<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style>
  body{
    padding-top: 70px;
  }
</style>
<?php

  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM `posts` WHERE `post_id` = '$id'";
  $result = mysqli_query($con, $sql);
 ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php while($row = mysqli_fetch_object($result)): ?>
        <div class="panel panel-info">
          <div class="panel-heading text-center"><h4><?= $row -> title ?></h4></div>
          <div class="panel-body">
            <div class="col-md-12">
              <img src="<?= $row -> image_url; ?>" alt="" class="img-responsive center-block">
              <h4 class="text-center">
                <?= $row -> description; ?>
              </h4>
            </div>
          </div>
          <?php $userid = $row -> user_id; ?>
        <?php endwhile; ?>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <form action="_postcomment.php" method="post">
                  <div class="col-md-10">
                    <div class="form-group">
                      <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter Your Comment" required>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="submit" class="form-control btn btn-primary" name="comments" value="submit">
                    </div>
                  </div>
                  <input type="hidden" name="postid" value="<?= $id ?>">
                  <input type="hidden" name="userid" value="<?= $userid ?>">
                </form>
              </div>
              <div class="col-md-12">
                <?php
                  $sql1 = "SELECT * FROM `comments` WHERE `post_id` = '$id'";
                  $result1 = mysqli_query($con,$sql1);
                 ?>
                <?php while($row1 = mysqli_fetch_object($result1)): ?>
                  <?php
                      $user_id = $row1 -> user_id;
                      $sql2 = "SELECT `username`,`profile_url` FROM `users` WHERE `user_id` ='$user_id'";
                      $result3 = mysqli_query($con,$sql2);
                   ?>
                   <?php while($row3 = mysqli_fetch_object($result3)): ?>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" height="50" width="50" src="<?= $row3 -> profile_url; ?>" alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><?= $row3 -> username ?></h4>
                  <?php endwhile; ?>
                    <?= $row1 -> comment; ?>
                  </div>
                </div>
              <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include 'includes/footer.php'; ?>
