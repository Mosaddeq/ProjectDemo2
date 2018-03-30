<?php 
	require_once ("includes/headerin.php");
    require_once ("includes/accountin.php");
    require ("includes/session.php");
    require ("includes/dbconnect.php");
    
    if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sqll="select * from reg where email = '$e_check'";
    $result = mysqli_query($conn,$sqll);
    $row = mysqli_fetch_assoc($result);
    If(count($row)>0){
    $sql = "UPDATE reg SET name='$name' or email='$email'";
    mysqli_query($conn,$sql);
    }
    
}





?>
<fieldset>
    <legend><b>PROFILE View</b></legend>
	<form>
    <table cellpadding="0" cellspacing="0">
    <tr>
    <td>Name:</td>
    <td><input type="text" id ="name" name = "name" > </td>
    
    <td rowspan="7" align="center">
					<img width="128" src="image/user.png"/>
                    <br/>
                    <a href="pictureIns.php">Change</a>
				</td>
    </tr>
    <tr>
    <td>Email:</td>
    <td><input type="email" id ="email" name = "email" > </td>
    </tr>
    <tr>
    <td>Gender:</td>
    <td>: <?php echo $login_session2; ?></td>

    </tr>
    <tr>
    <td>Designation:</td>
    <td>: <?php echo $login_session3; ?></td>
    </tr>
    <td>
     <input type="submit" name="submit" value="Update">        
    </td>
    
    </table>
		
	</form>
</fieldset>
<?php 
	require_once "includes/footerN.php";
?>