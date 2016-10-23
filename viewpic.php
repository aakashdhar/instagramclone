<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<style>
  body{
    padding-top: 70px;
  }
</style>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
          <div class="panel-heading text-center"><h4>Thumbnail Title</h4></div>
          <div class="panel-body">
            <div class="col-md-12">
              <img src="css/images/cover.jpg" alt="" class="img-responsive">
              <h4 class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et aliquid quam vero nulla obcaecati placeat.
                Nisi saepe cum et itaque aperiam facere maxime, accusantium hic sunt architecto molestiae soluta. Fugit!
              </h4>
            </div>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-md-12">
                <form action="postcomment.php" method="post">
                  <div class="col-md-10">
                    <div class="form-group">
                      <input type="text" class="form-control" id="comment" name="comment" placeholder="Enter Your Comment">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <input type="submit" class="form-control btn btn-primary" name="submit" value="comment">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-12">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" height="50" width="50" src="css/images/cover.jpg" alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">wolfenstein</h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea modi quisquam, fuga aut sit eius recusandae
                    nulla libero delectus rem ipsum, minus facere dolor veritatis, cupiditate totam doloribus aliquid ut!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
