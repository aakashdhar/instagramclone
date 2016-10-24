<?php include 'includes/header.php'; ?>
<?php
  $id = $_SESSION['userid'];
  if (isset($_POST['update'])) {
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $bio = $_POST['bio'];
      $photourl = $_POST['photourl'];
      $target = "uploads/";
      $target = $target . basename( $_FILES['photo']['name']);

      if ($_FILES['photo']['size'] == 0) {
        unset($target);
        $target = $photourl;
      }else {
        $tmpname = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpname, $target);
      }
  }
  $sql1 = "UPDATE `users` SET `fullname`='$fullname',`username`='$username',`email`='$email',
          `bio`='$bio',`profile_url`='$target' WHERE `user_id` = '$id'";
  $result1 = mysqli_query($con, $sql1);
  if ($result1) {
    header('Location: profile.php');
  }
 ?>
