<?php include 'includes/header.php'; ?>
<?php
  if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
  }
  $id = $_SESSION['userid'];
  $target = "instauploads/";
  $target = $target. basename($_FILES['photo']['name']);

  $tmpname = $_FILES['photo']['tmp_name'];
  move_uploaded_file($tmpname, $target);

  $sql = "INSERT INTO `posts`(`user_id`, `title`, `image_url`, `description`) VALUES
          ('$id','$title','$target','$description')";
  $result = mysqli_query($con,$sql);

  if (!empty($result)) {
      header('Location: profile.php');
  }else {
      echo "fail";
  }

?>
