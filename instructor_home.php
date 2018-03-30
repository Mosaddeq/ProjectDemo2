<?php 
	require_once ("includes/headerin.php");
    require_once ("includes/accountin.php");
    require ("includes/session.php");
?>
<fieldset>
    <legend><b>PROFILE View</b></legend>
	<form>
    <table cellpadding="0" cellspacing="0">
    <tr>
    <td>Name:</td>
    <td>: <?php echo $login_session; ?></td>
    <td rowspan="7" align="center">
					<img width="128" src="image/user.png"/>
                    <br/>
                    <a href="pictureIns.php">Change</a>
				</td>
    </tr>
    <td>Email:</td>
    <td>: <?php echo $login_session1; ?></td>
    </tr>
    <td>Gender:</td>
    <td>: <?php echo $login_session2; ?></td>
    </tr>
    <td>Designation:</td>
    <td>: <?php echo $login_session3; ?></td>
    </tr>
    
</table>
		
	</form>
</fieldset>
<?php 
	require_once "includes/footerN.php";
?>
