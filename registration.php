
<?php 
	
	require ("validation.php");
	include "header.php";
?>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-12 m-auto d-block">

<fieldset>
<legend><h1 class=""text-success text-center"">REGISTRATION</h1></legend>
	<form method="POST" action="#" class="bg-light">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Full Name</td>
				<td>:</td>
				<td><input name="name" type="text">
				<span class="error">* <?php echo $nameErr;?></span>
				</td>
				
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="email">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
					<span class="error">* <?php echo $emailErr;?></span>
				</td>
				<td></td>
			</tr>		
			
			
		<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password">
				<span class="error">* <?php echo $passErr;?></span>
				</td>
				
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="cpass" type="password">
				<span class="error">* <?php echo $passErr;?></span>
				</td>
				
				<td></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio">Male
						<input name="gender" type="radio">Female
						<span class="error">* <?php echo $genderErr;?></span>
						
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
			<fieldset>
				<legend>User Type</legend>
				<select id="uType" value="combo" class="form-control" name="uType" >
				<option value=""></option>
				<option value="Instructor">Instructor</option>
				<option value="Student">Student</option>
				<span class="error">* <?php echo $typeErr;?></span>
				</select>
			</fieldset>
			</td>
			
			<tr>
		<td><input id="check"  type="checkbox" name="check" value="checked" placeholder="" />Yes,I've read the <a href="terms and conditions.html">terms and conditions </a> and i agree 
		<span class="error">* <?php echo $checkErr;?></span>
		</td>
		
		</tr>	
		</table>
		
		<br>
		<input type="submit" name="submit" value="Submit" class ="btn btn-success">
		
	</form>
</fieldset>
</body>
</html>
<?php 
	include "footer.php";
?>
