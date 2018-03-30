<?php
require("includes/dbconnect.php");

session_start(); //start session

$e_check = $_SESSION['email_check'];
//$pass_check=$_SESSION['password'];
$sql="select * from reg where email = '$e_check'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$login_session = $row['name'];
$login_session1 = $row['email'];
$login_session2 = $row['gender'];
$login_session3 = $row['uType'];

if(!isset($login_session)){
    mysqli_close($conn);

}

?>