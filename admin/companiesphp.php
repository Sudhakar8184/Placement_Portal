
<?php include 'db.php'; ?>
<head>
<?php 
if(isset($_REQUEST['del_com_id'])){
	?>
	<script>alert('you want to delete');</script>
	<?php
	$del_sql="DELETE FROM company WHERE com_id='$_REQUEST[del_com_id]'";
	$run=mysqli_query($con,$del_sql);
	
}

if(isset($_REQUEST['up_com_id']))
{
	$com_name=mysqli_real_escape_string($con,strip_tags($_REQUEST['com_name']));
	$com_percentage=mysqli_real_escape_string($con,strip_tags($_REQUEST['com_percentage']));
	$com_salary=mysqli_real_escape_string($con,strip_tags($_REQUEST['com_salary']));
	$com_drive=mysqli_real_escape_string($con,strip_tags($_POST['com_drive']));
	$com_last_date=mysqli_real_escape_string($con,strip_tags($_POST['com_reg_date']));
	$com_stream=mysqli_real_escape_string($con,strip_tags($_POST['com_stream']));
	$com_gender=mysqli_real_escape_string($con,strip_tags($_POST['com_gender']));
	$com_web=mysqli_real_escape_string($con,strip_tags($_POST['com_web']));
	$com_skill=mysqli_real_escape_string($con,strip_tags($_POST['com_skill']));
    $upd_sql="UPDATE company SET com_name='$com_name',com_percentage='$com_percentage',com_salary='$com_salary',com_drive_date='$com_drive',com_reg_date='$com_last_date',com_stream='$com_stream',com_gender='$com_gender',com_website='$com_web',com_skill_req='$com_skill' WHERE com_id='$_REQUEST[up_com_id]'";
     if(mysqli_query($con,$upd_sql))
		 { ?>
        <script>window.location="companies.php"</script>
	     <?php }
		 
}
?>
<table class="table table-bordered table-striped">
	<thead>
	<tr class="item-head"> 
	<th>S.no</th>
	<th>Company</th>
	<th>Percentage</th>
	<th>Salary</th>
	<th>Program/Stream</th>
	<th>Drive Date</th>
	<th>Last Date of Registration</th>
	<th>Eligible Gender</th>
	<th>Website</th>
	<th>Skills Required</th>
	<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
       $sql="SELECT * FROM company";
	   $run=mysqli_query($con,$sql);
	   $c=1;
	   while($row=mysqli_fetch_assoc($run)){
	echo "<tr>
	<td>$c</td>
	<td>$row[com_name]</td>
	<td>$row[com_percentage]</td>
	<td>$row[com_salary]</td>
	<td>$row[com_stream]</td>
	<td>$row[com_drive_date]</td>
	<td>$row[com_reg_date]</td>
	<td>$row[com_gender]</td>
	<td>$row[com_website]</td>
	<td>$row[com_skill_req]</td>
	<td><div class='dropdown'>
	<button data-toggle='dropdown' class='btn btn-danger dropdown-toggle'>Action<span class='caret'></span></button>
	  <ul class='dropdown-menu dropdown-menu-right'>
	  <li><a href='#edit_modal$row[com_id]' data-toggle='modal'>Edit</a></li>"; ?>
	  <li><a onclick="del_func(<?php echo $row['com_id']; ?>);" >Delete</a></li>
	 <?php 
 echo 	"</ul>
 </div>
 <div class='modal fade' id='edit_modal$row[com_id]'>
<div class='modal-dialog'>
<div class='modal-content'>
<div class='modal-header'>
<button class='close' data-dismiss='modal'>&times;</button>
<h3>Add Details</h3>
</div>
<div class='modal-body'>
<form method='post'>
<div class='form-group'>
<label>company Name</label>
<input type='text' id='com_name' value='$row[com_name]' class='form-control' required>
</div>
<div class='form-group'>
<label>company Salary</label>
<input type='text' id='com_salary' value='$row[com_salary]' class='form-control' required>
</div>
<div class='form-group'>
<label>company percentage</label>
<input type='text' id='com_percentage' value='$row[com_percentage]' class='form-control' required>
</div>
<div class='form-group'>
<label>Drive Date</label>
<input type='number'  id='com_drive' value='$row[com_drive_date]' class='form-control' required>
</div>
<div class='form-group'>
<label>Last Date of Registration</label>
<input type='number' id='com_reg_date' value='$row[com_reg_date]' class='form-control' required>
</div>
<div class='form-group'>
<label>Program/Stream</label>
<input type='text' id='com_stream' value='$row[com_stream]' class='form-control' required>
</div>
<div class='form-group'>
<label>Eligible Gender</label>
<input type='text' id='com_gender' value='$row[com_gender]' class='form-control' required>
</div>
<div class='form-group'>
<label>Website</label>
<input type='text' id='com_web' value='$row[com_website]' class='form-control' required>
</div>
<div class='form-group'>
<label>Skills Required</label>
<input type='text' id='com_skill' value='$row[com_skill_req]' class='form-control' required>
</div>
<div class='form-group'>
<input type='hidden' id='com_id' value='$row[com_id]'>";?>
	   <button class='btn btn-success btn-block' onclick="edit_form(<?php echo $row['com_id'];?>);" class='form-control' >submit</button>

<?php 
echo "</div>
</form>
</div>
<div class='modal-header'>
<div class='text-right'>
<button class='btn btn-danger' data-dismiss='modal'>colse</button>
</div>
</div>
</div>
</div>
</div>
 </div>
 
 
	 </tr>";	  
$c++;
	  }?>
	</tbody>
	</table>