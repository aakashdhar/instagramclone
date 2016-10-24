<?php include 'includes/header.php'; ?>
<?php
  if (isset($_POST['register'])) {
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $hashed = password_hash($password,PASSWORD_DEFAULT);

      $sql = "INSERT INTO `users`(`fullname`, `username`, `password`, `email`) VALUES
              ('$fullname','$username','$hashed','$email')";
      $result = mysqli_query($con,$sql);

      if (!empty($result)) {
        header('Location: index.php');
      }else {
        $error = "somethings not right";
        header('Location: index.php');
      }
  }

?>
