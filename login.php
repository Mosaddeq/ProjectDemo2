<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    require ("includes/dbconnect.php");
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM reg WHERE email='$email' and password = '$pass'";
    $result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result); //fetches a result row as an associative array. 

    If(count($row)>0 && $row['uType']=='Instructor')
    {
		//echo 'yaaaa';
		$_SESSION['email_check']=$email;      //initializing sessions
		$_SESSION['password']=$pass;
		$_SESSION['uType']= 'Instructor';
        header('location: instructor_home.php');
    }
	else if(count($row)>0 && $row['uType']=='Student')
	{
		//echo 'boo';
		$_SESSION['email']=$email;
		$_SESSION['password']=$pass;
		$_SESSION['uType']= 'Student';
        header('location: student_home.php');
	}
}

include("includes/header.php")

?>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="#" method="POST" onsubmit="return getEmail()">
        <table>
            <tr>
                <td>User Email</td>
				<td>:</td>
                <td><input type="email" name="email" id='email'  /></td>
				
			</tr>
            <tr>
                <td>User Password</td>
				<td>:</td>
                <td><input type="password" name="pass"></td>
            </tr>
        </table>
        <hr />
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" name="submit" value="Submit">        
		<a href="forget.php">Forgot Password?</a>
    </form>
</fieldset>
<?php 
	require_once "includes/footer.php";
?>


