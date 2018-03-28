<?php
$is_err = 0;
if(empty ($_POST["name"])){
    $nameErr = "Field required";
    $is_err = 1;
    }	
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $is_err = 1; 												
    }
    if(empty ($_POST["email"])){
        $emailErr = "Field required";
        $is_err = 1;
    }	
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))            
    {
        $emailErr = "Invalid email format";
        $is_err = 1;
    }
    if(empty ($_POST["gender"]))
    {
        $genderErr = "Field required";
    }
    if(empty ($_POST["pass"])){
        $passErr = "Field required";
        }
    if($pass != $cpass)
	{
		$passErr = "password did not match";
		$is_err = 1;
    }
    if(empty ($_POST["check"]))
    {
        $checkErr = "Field required";
        $is_err = 1;
    }
    if(empty ($_POST["uType"]))
    {
        $typeErr = "Field required";
        $is_err = 1;
    }
    $sql = "insert into reg values ('".$name."','".$email."','".$gender."','".$pass."','".$uType."')";
    if($is_err==0){
        
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        //header('location: login.php');	
    }
?>