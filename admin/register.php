<?php include "db.php"; ?>

<html>
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/lightbox.css">
<link rel="stylesheet" href="css/font-awesome.css">
<script src="js/jquery.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<body >
	<?php include "header.php";?>
	<table class="table table-bordered table-striped">
	<thead>
	<tr class="item-head"> 
	<th>S.no</th>
	<th>Company Name</th>
	<th>Frist Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Contact Number</th>
	<th>Project</th>
	<th>Resume</th>
	</tr>
	</thead>
	<tbody>
	<?php
       $sql="SELECT * FROM register";
	   $run=mysqli_query($con,$sql);
	   $c=1;
	   while($row=mysqli_fetch_assoc($run)){
	echo "<tr>
	<td>$c</td>
	<td>$row[com_name]</td>
	<td>$row[reg_fname]</td>
	<td>$row[reg_lname]</td>
	<td>$row[reg_email]</td>
	<td>$row[reg_contactnumber]</td>
	<td>$row[reg_project]</td>
	<td><a href='uploads/$row[reg_resume]' target='_blank'>view file</a></td>
	   ";
	   $c++;}
	   ?>
	   </tbody>
	   </table>