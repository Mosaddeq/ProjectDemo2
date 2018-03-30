<?php
require("includes/dbconnect.php");
$sql="select * from upload";
$query=mysqli_query($conn,$sql);
$rowcount = mysqli_num_rows($query); //count rows
?>
<table border="1">
<tr>
<td>Files</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++) //to fetch all data 
{
  $row = mysqli_fetch_array($query); //fetch rows
}
?>
<tr>
<td><a href="upload/"><?php echo $row["file"] ?>"><?php echo $row["file"] ?></td>
</tr>
if()
<a href="instructor_home.php">Back</a>




