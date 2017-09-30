<?php
$server="localhost";
$username="placement";
$password="";
$db ="placement";
 $con=mysqli_connect($server, $username, $password, $db);
?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM placement WHERE email='$email' AND password='$password'";
$run= mysqli_query($con,$sql);
if(($row=mysqli_fetch_assoc($run)))
{
$u_id=$row['u_id'];	
?><script>window.location='login.php?u_id=<?php echo $u_id; ?>'</script>
	<?php

}
    else {?>
		<script>alert('please check you password');</script>
		<script>window.location='home.php';</script>
		<?php
	}
	  
 ?>