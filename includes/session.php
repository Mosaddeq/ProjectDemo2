<?php
require("includes/dbconnect.php");

session_start(); //start session

$e_check = $_SESSION['email_check'];
$pass_check=$_SESSION['login_password'];
$sql="select * from reg where email = '$e_check' and password = '$pass_check' "; //checking sesisons from login.php under if state() $_SESSION['email_check']=$email;    
                                                                              //initializing sessions
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


$login_session = $row['name'];
$login_session1 = $row['email'];
$login_session2 = $row['gender'];
$login_session3 = $row['uType'];
$login_session4 = $row['cInfo'];


if(!isset($login_session)){
    mysqli_close($conn);

}

?>
