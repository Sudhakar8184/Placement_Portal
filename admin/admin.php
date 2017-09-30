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
<?php include "header.php"; ?>
<table class="table table-bordered table-striped">
	<thead>
	<tr class="item-head"> 
	<th>S.no</th>
	<th>u_id</th>
	<th>Name</th>
	<th>Email</th>
	<th>Percentage</th>
	<th>Gender</th>
	<th>degree</th>
	<th>Stream</th>
	<th>College</th>
	<th>State</th>
	</tr>
	</thead>
	<tbody>
	<?php
       $sql="SELECT * FROM placement";
	   $run=mysqli_query($con,$sql);
	   $c=1;
	   while($row=mysqli_fetch_assoc($run)){
	echo "<tr>
	<td>$c</td>
	<td>$row[u_id]</td>
	<td>$row[name]</td>
	<td >$row[email]</td>
	<td>$row[percentage]</td>
	<td>$row[gender]</td>
	<td>$row[degree]</td>
	<td>$row[stream]</td>
	<td>$row[college]</td>
	<td>$row[state]</td>
</body>
</html>";
	   
	   $c++;
	   }
?>