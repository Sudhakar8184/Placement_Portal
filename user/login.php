<?php
$server="localhost";
$username="placement";
$password="";
$db ="placement";
 $con=mysqli_connect($server, $username, $password, $db);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>placementprotal.com</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/bootstrap.js"></script>
	<style>
	.table
	{
	text-align: left;
	margin: 0px 50px 0px 50px;<!--top, right, bottom, and left)-->
	}
	.container {
    border-radius: 4px;
    background-color: #f2f2f2;
    padding: 10px;
}
	</style>
	
	<script>
	function egb_func(u_id){
			
				 xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function (){
					if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', 'egbphp.php?u_id='+u_id, true);
				xmlhttp.send();
			}
			
		/*	function submit_func(u_id){
				
	$fname=document.getElementById('fname').value; 
	alert($fname);
	$lname=document.getElementById('lname'+u_id).value;
	$email=document.getElementById('email'+u_id).value;
	$contactnumber=document.getElementById('contactnumber'+u_id).value;
    $project=document.getElementById('project'+u_id).value;
	$resume=document.getElementById('resume'+u_id).value;
	 alert($email);
	
	  xmlhttp.open('GET', 'egbphp.php?reg_u_id='+u_id+'&fname='+$fname+'&lname='+$lname+'&email='+$email'&contactnumber='+$contactnumber+'&project='+$project+'&resume='+$resume, true);
      xmlhttp.send();*/
	 
 
			</script>
	</head>
    <body style="BACKGROUND-COLOR: lightblue">
        
 <nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
      <img src="img/Portal.png " alt="SPS" style="width:200px;height:200px;">
      
    </div>
    <ul class="nav navbar-nav">
      <?php
if($_REQUEST['u_id'])
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
    </ul>";
}}
	
	?>
      
      <br><br>
      <form method="post" action="logoutServlet" class="navbar navbar-right text-center">
       <a href="home.php" target="_self"  class="btn btn-info" name="signup" >Logout
      </a>
          </form>  
        </div>
</nav>
<center><h1><b>WELCOME TO PLACEMENT PORTAL</b>
<div class="container">
<p class="table">
<form>
<table>
<?php
if(isset($_GET['u_id']))
{
$sql1="SELECT * FROM placement WHERE u_id='$_GET[u_id]'";
 $run=mysqli_query($con,$sql1);
while($row=mysqli_fetch_assoc($run)){
echo "<tr>
    <td>Name</td>
    <td>$row[name]</td> 
</tr>
	<tr>

	<td>Email</td>
    <td>$row[email]</td>
</tr> 
<tr>
	 <td>College</td>
    <td>$row[college]</td>
</tr>	
<tr>	
	<td>percentage</td>
    <td>$row[percentage]</td>
 </tr>

 </table></center>
 </form>
 </p>";?>
<center><button onclick="egb_func(<?php echo $row['u_id'];?>);"  class="btn btn-success">CHECK YOUR ELIGIBILITY</button></center>
<?php
}
}
 ?>
<div id="get_data">
<div>
</div>
</body>
</html>