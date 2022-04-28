<?php
  //echo 'I\'m alive!';
  session_start();
  include form.php;
  if (!$_FILES['file']['name']) {
    header("Location: index.php");
  } else {
      header("Location: post.php");
  }

  print_r($_FILES['file']['name']);
