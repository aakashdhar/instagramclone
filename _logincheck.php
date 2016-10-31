<?php include 'includes/header.php'; ?>
<?php
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
  }
  $sql = "SELECT * FROM `users` WHERE `username` ='$username'";
  $result = mysqli_query($con,$sql);
  $user = mysqli_fetch_object($result);
  $totaluser = mysqli_num_rows($result);

  if ($totaluser < 1) {
   $error = "The given user doesnot exist in the database.";
    header('Location: index.php?error='.urlencode($error));
    exit();
  }else if (!password_verify($password, $user->password)) {
    $error = "Password does not match with the email id given";
     header('Location: index.php?error='.urlencode($error));
     exit();
  }else{

    $_SESSION['userid'] = $user->user_id;
    $_SESSION['name'] = $user->fullname;
    $_SESSION['username'] = $user->username;
    header('Location: profile.php');
  }
?>
