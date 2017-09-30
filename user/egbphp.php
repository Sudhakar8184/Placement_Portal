<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="css/font-awesome.css">
</head>
<?php
$server="localhost";
$username="placement";
$password="";
$db ="placement";
 $con=mysqli_connect($server, $username, $password, $db);
?>

<table class='table'>
<thead>
<tr>
    <th>S.No</th>
    <th>Company Name</th>
    <th>Salary</th>
	<th>Register</th>
</tr>
</thead>
<tbody> 
<?php
if($_REQUEST['u_id'])
{
	//$com_sql="SELECT * FROM company";
	$com_sql="SELECT * FROM company c JOIN placement p  
  ON p.percentage>c.com_percentage WHERE p.u_id='$_REQUEST[u_id]'";
	$com_run=mysqli_query($con,$com_sql);
	$c=1;
	
  while($com_row=mysqli_fetch_assoc($com_run)){
	  $user_id=$_REQUEST['u_id'];
	  if($com_row['com_user_id']==''){
		 $u_id= $user_id;
	  }else{
		  $u_id=$user_id;
	  }
		
echo "<tr>	
    <td><b>$c</b></td>
    <td><b>$com_row[com_name]</b></td>
    <td><b>$com_row[com_salary]</b></td>
	<td><a href='company.php?com_id=$com_row[com_id]&u_id=$user_id' class='btn btn-info'>view/register</a>
</td>
  </tr>";
  
  $c++;
	}
	
	}?>
  </tbody>
</table>



		
