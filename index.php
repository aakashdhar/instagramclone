<?php include 'includes/header.php'; ?>
<div class="overlay">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div>
            <h1>Instagram</h1>
          </div>
        </div>
      </div>
      <div>
        <div class="col-md-4 col-md-offset-2 hidden-xs">
          <div class="row">
            <div class="col-md-12">
              <img src="css/images/img2.png" alt="" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12 form-box">
                <form class="" action="_logincheck.php" method="post">
                  <div class="text-center">
                    <h2>Login</h2>
                  </div>
                  <div class="form-group">
                    <!-- <label for="username" class="control-label">Username</label> -->
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="Password" class="control-label">Username</label> -->
                    <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your Password" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="login to instagram" id="username" name="login">
                  </div>
                  <?php if (isset($_GET['error'])): ?>
                    <p class="text-center text-danger bg-danger"><?= $_GET['error']; ?></p>
                  <?php endif; ?>
                </form>
            </div>
          </div><br><br>
          <div class="row">
              <div class="col-md-12 form-box">
                <form class="" action="_register.php" method="post">
                  <div class="text-center">
                    <h2>Register</h2>
                  </div>
                  <div class="form-group">
                    <!-- <label for="fullname" class="control-label">Fullname</label> -->
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your Fullname" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="email" class="control-label">Email</label> -->
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="username" class="control-label">Username</label> -->
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" required>
                  </div>
                  <div class="form-group">
                    <!-- <label for="Password" class="control-label">Username</label> -->
                    <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your Password" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value="Register to instagram" id="username" name="register">
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<?php include 'includes/footer.php'; ?>
