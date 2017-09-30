<?php
$server="localhost";
$username="placement";
$password="";
$db ="placement";
 $con=mysqli_connect($server, $username, $password, $db);
?>
<html>
<title>company/register</title>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/font-awesome.css">

</head>
<body>
    <body style="BACKGROUND-COLOR: lightblue">
        
 <nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
      <img src="img/Portal.png " alt="SPS" style="width:200px;height:200px;">
      <img src="img/giphy.gif" alt="HTML5 Icon" style="width:128px;height:128px;">
    </div>
    <ul class="nav navbar-nav">
	<?php
if($_REQUEST['com_id'])
{
	$com_sql="SELECT * FROM placement WHERE u_id='$_REQUEST[u_id]'";
	//$com_sql="SELECT * FROM company c JOIN placement p ON  WHERE p.u_id='$_REQUEST[u_id]'";
	$com_run=mysqli_query($con,$com_sql);
  while($com_row=mysqli_fetch_assoc($com_run)){
	  $u_id=$com_row['u_id'];
	 
	echo "
	
      <li class='active'><a href='login.php?u_id=$u_id>'>Home</a></li>
      <li><a href='#about'> About Us</a></li>
      <li><a href='#'>Career</a></li>
      <li><a href='#contact'>Contact US</a></li>
    </ul>
	<p align='right'>
            <a href='home.php' class='btn btn-info'>Login</button>
			</p></a>
		</div>
</nav>
<table class='table'>
<thead>";
  }
}
?>
<?php
if($_REQUEST['com_id'])
{
	$com_sql="SELECT * FROM company WHERE com_id='$_REQUEST[com_id]'";
	//$com_sql="SELECT * FROM company c JOIN placement p ON p.u_id=c.com_id  WHERE p.u_id='$_REQUEST[u_id]'";
	$com_run=mysqli_query($con,$com_sql);
  while($com_row=mysqli_fetch_assoc($com_run)){
	  $com_id=$com_row['com_id'];
	 
	echo "

	<tr>
<td class='text-center' style='width:40%;'><h1>Company Name<h1></td>
<td><h1>$com_row[com_name]<h1></td>
</tr>
	<tr>
<td class='text-center' style='width:40%;'>Program/Stream</td>
<td>$com_row[com_stream]</td>
</tr>
<tr>
<td class='text-center' style='width:40%;'>Salary Package</td>
<td><mark>$com_row[com_salary]<mark></td>
</tr>
<tr>
<td class='text-center' style='width:40%;'>Drive Date</td>
<td>$com_row[com_drive_date]</td>
</tr>
<tr>
<td class='text-center' style='width:40%;'>Last Date of Registration</td>
<td>$com_row[com_reg_date]</td>
</tr>
<tr>
<td class='text-center' style='width:40%;'>Eligible Gender</td>
<td>$com_row[com_gender]</td>
</tr>
<tr>
<td class='text-center' style='width:40%;'>Website</td>
<td><a href='$com_row[com_website]'>$com_row[com_website]</a></td>
</tr>
<tr>
<td class='text-center' style='width:30%;'>Skills Required</td>
<td>$com_row[com_skill_req]</td>
</tr>
</thead>
</table>";
echo "<center><button class='btn btn-success' data-backdrop='static' data-target='#register_modal$com_id' data-toggle='modal' >register</button></center>
<div class='modal fade' id='register_modal$com_id'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>
<button class='close' data-dismiss='modal'>&times;</button>
<h3>Add Details</h3>
</div>
<div class='modal-body'>
<form method='post' >
<div class='form-group'>
<label>Company Name</label>
<input type='text' id='companyname' name='companyname' value='$com_row[com_name]' class='form-control' required>
</div>
<div class='form-group'>
<label>FirstName</label>
<input type='text' id='name' name='firstname' class='form-control' required>
</div>
<div class='form-group'>
<label>LastName</label>
<input type='text' id='name' name='lastname' class='form-control' required>
</div>
<div class='form-group'>
<label>Email</label>
<input type='email' id='email' name='email' class='form-control' required>
</div>
<div class='form-group'>
<label>Resume</label>
<input type='file' id='resume' name='resume' class='form-control'>
</div>
<div class='form-group'>
<label>project</label>
<input type='number' id='project' name='project' placeholder='no of project' class='form-control' required>
</div>
<div class='form-group'>
<label>Contact_number</label>
<input type='contactnumber' id='contactnumber' name='contactnumber' class='form-control' required>
</div>
<div class='form-group'>
<button class='btn btn-success btn-block' name='submit' class='form-control' >submit</button>
</div>
</form>
</div>
<div class='modal-header'>
<div class='text-right'>
<button class='btn btn-danger' data-dismiss='modal'>colse</button>
</div>
</div>
</div>
</div>
</div>";
 }
}
?>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$com_name=mysqli_real_escape_string($con,strip_tags($_POST['companyname']));
$firstname=mysqli_real_escape_string($con,strip_tags($_POST['firstname']));
$lastname=mysqli_real_escape_string($con,strip_tags($_POST['lastname']));
$email=mysqli_real_escape_string($con,strip_tags($_POST['email']));
$contact_number=mysqli_real_escape_string($con,strip_tags($_POST['contactnumber']));
$project=mysqli_real_escape_string($con,strip_tags($_POST['project']));	
$resume=mysqli_real_escape_string($con,strip_tags($_POST['resume']));

$sql= "INSERT INTO register(reg_u_id,com_name,reg_fname,reg_lname,reg_email,reg_contactnumber,reg_resume,reg_project) VALUES ('1','$com_name','$firstname','$lastname ','$email','$contact_number','$resume','$project')";
$run=(mysqli_query($con,$sql));
}?>