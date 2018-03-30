<?php 
//file_uploads == On;

require ("includes/dbconnect.php");

if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];  //$_files for file types
	$tmp_name=$_FILES["file"]["tmp_name"]; /* move_uploaded_file funct. only accepts 2 parameters .
												so tmp_name is for that purpose to temporarily hold the file*/
	$path="uploads/".$file;  //to which folder file to be saved which is saved in $file var
	$file1=explode(".",$file); //to check extension after '.'
	$ext=$file1[1];
	$allowed=array("jpg","png","gif","pdf","wmv","pdf","zip","txt");

$sql="insert into upload (file) value('$file')";

if(in_array($ext,$allowed))
{
 	move_uploaded_file($tmp_name,$path); //function through which file is uploaded
	//mysqli_query();
	mysqli_query($conn,$sql);
	
	
}
}

?>


<form enctype="multipart/form-data" method="post" action="#">

File Upload:<input type="file" name="file">
<input type="submit" name="submit" value="upload">
<br>
<a href="instructor_home.php">Back</a>
</form