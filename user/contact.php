<?php include "db.php"; ?>
<?php
if(isset($_REQUEST['con_submit']))
{
	$name=mysqli_real_escape_string($con,strip_tags($_POST['name']));
	$email=mysqli_real_escape_string($con,strip_tags($_POST['email']));
	$message=mysqli_real_escape_string($con,strip_tags($_POST['message']));
	$sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
	$run=mysqli_query($con,$sql);
}
?>