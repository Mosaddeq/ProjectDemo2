<?php
 $name = sts($_POST["name"]);
 $email = sts($_POST["email"]);
 $gender = sts($_POST["gender"]);
 $password = sts($_POST["pass"]);
 $uType = sts($_POST["uType"]);

function sts($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


}
?>