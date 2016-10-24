<?php include 'includes/header.php'; ?>

<?php

  if (isset($_POST['comments'])) {
    $comment = $_POST['comment'];
    $postid = $_POST['postid'];
    $userid = $_POST['userid'];
  }

  $sql = "INSERT INTO `comments`(`user_id`, `comment`, `post_id`) VALUES
          ('$userid','$comment','$postid')";
  $result = mysqli_query($con,$sql);

  if (!empty($result)) {
      header('Location: viewpic.php?id='.$postid);
  }


?>
