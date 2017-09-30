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
<script>
 function admin_func(){
	  var xmlhttp= new XMLHttpRequest();
	  xmlhttp.onreadystatechange=function(){
	 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
	  
	  }
	  xmlhttp.open('GET', 'companiesphp.php', true);
      xmlhttp.send();
	 
 }
 function del_func(com_id){
	  var xmlhttp= new XMLHttpRequest();
	  xmlhttp.onreadystatechange=function(){
	 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
	  
	  }
	  xmlhttp.open('GET', 'companiesphp.php?del_com_id='+com_id, true);
      xmlhttp.send();
 }
 function edit_form(){
	com_id=document.getElementById('com_id').value; 
	com_name=document.getElementById('com_name').value;
	com_percentage=document.getElementById('com_percentage').value;
	com_salary=document.getElementById('com_salary').value;
	com_drive=document.getElementById('com_drive').value;
	com_reg_date=document.getElementById('com_reg_date').value;
	com_stream=document.getElementById('com_stream').value;
	com_gender=document.getElementById('com_gender').value;
	com_web=document.getElementById('com_web').value;
	com_skill=document.getElementById('com_skill').value;
	  var xmlhttp= new XMLHttpRequest();
	  xmlhttp.onreadystatechange=function(){
	 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('get_data').innerHTML = xmlhttp.responseText;
					}
	  
	  }
	  xmlhttp.open('GET', 'companiesphp.php?up_com_id='+com_id+'&com_name='+com_name+'&com_percentage='+com_percentage+'&com_salary='+com_salary+'&com_drive='+com_drive+'&com_reg_date='+com_reg_date+'&com_stream='+com_stream+'&com_gender='+com_gender+'&com_web='+com_web+'&com_skill='+com_skill, true);
      xmlhttp.send();
	 
 }
 </script>
</head>
<body>
<body onload="admin_func();">
	<?php include "header.php";?>
	<div class="container">
	<button class="btn btn-primary " data-toggle="modal" data-backdrop="static" data-target="#add_person" >Add companies</button><br><br>
<div class="modal fade" id="add_person">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class=" close" data-dismiss="modal">&times;</button>
<h3>Add Details</h3>
</div>
<div class="modal-body">
<form method="post">
<div class="form-group">
<label>company Name</label>
<input type="text" name="com_name" class="form-control" required>
</div>
<div class="form-group">
<label>company Salary</label>
<input type="number" name="com_salary" class="form-control" required>
</div>
<div class="form-group">
<label>Percentage</label>
<input type="number" name="com_percentage" class="form-control" required>
</div>
<div class="form-group">
<label>Drive Date</label>
<input type="number" name="com_drive" class="form-control" required>
</div>
<div class="form-group">
<label>Last Date of Registration</label>
<input type="number" name="com_last_date" class="form-control" required>
</div>
<div class="form-group">
<label>Program/Stream</label>
<input type="text" name="com_stream" class="form-control" required>
</div>
<div class="form-group">
<label>Eligible Gender</label>
<input type="text" name="com_gender" class="form-control" required>
</div>
<div class="form-group">
<label>Website</label>
<input type="text" name="com_web" class="form-control" required>
</div>
<div class="form-group">
<label>Skills Required</label>
<input type="text" name="com_skill" class="form-control" required>
</div>
<div class="form-group">
<button class="btn btn-success btn-block" name="ins_submit" class="form-control" >submit</button>
</div>
</form>
</div>
<div class="modal-header">
<div class="text-right">
<button class="btn btn-danger" data-dismiss="modal">colse</button>
</div>
</div>
</div>
</div>
</div>

	<div id="get_data">
	
	
	
	</div>
	<?php //include "footer.php";?>
	</div>
	</body>
	
	</html>
	<?php
if(isset($_POST['ins_submit']))
{
	$com_name=mysqli_real_escape_string($con,strip_tags($_POST['com_name']));
	$com_salary=mysqli_real_escape_string($con,strip_tags($_POST['com_salary']));
	$com_percentage=mysqli_real_escape_string($con,strip_tags($_POST['com_percentage']));
	$com_drive=mysqli_real_escape_string($con,strip_tags($_POST['com_drive']));
	$com_last_date=mysqli_real_escape_string($con,strip_tags($_POST['com_last_date']));
	$com_stream=mysqli_real_escape_string($con,strip_tags($_POST['com_stream']));
	$com_gender=mysqli_real_escape_string($con,strip_tags($_POST['com_gender']));
	$com_web=mysqli_real_escape_string($con,strip_tags($_POST['com_web']));
	$com_skill=mysqli_real_escape_string($con,strip_tags($_POST['com_skill']));
	$sql="INSERT INTO company(com_user_id,com_name,com_percentage,com_salary,com_drive_date,com_reg_date,com_stream,com_gender,com_website,com_skill_req) VALUES('1','$com_name','$com_percentage','$com_salary','$com_drive','$com_last_date','$com_stream','$com_gender','$com_web','$com_skill')";
	$run=mysqli_query($con,$sql);
}
?>