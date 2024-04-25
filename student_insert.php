<?php
include('db_connect.php');
$fullname=$_POST['fullname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$addaress=$_POST['addaress'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$student_reg_no=$_POST['sturegno'];
//$student_photo=$_POST['stuph'];
$student_status=$_POST['stustatus'];
$course_id=$_POST['course_id'];

$st_photo=$_FILES['st_photo']['name'];
$tmp_location=$_FILES['st_photo']['tmp_name'];
$target="../attached/student/".$st_photo;
move_uploaded_file($tmp_location,$target);

 $sql2="select * from  student_details where student_reg_no='$student_reg_no' ";
$res2=$conn->query($sql2);
if($row2=mysqli_fetch_array($res2))
{
	
	?>
	<script>
alert("<?php echo $student_reg_no; ?> This Reg. Number Already Registered");
history.back();
</script>
	<?php
	}
	else
	{
  $sql="insert into student_details values(null,'$fullname','$dob','$gender','$addaress','$city','$pincode','$emailid','$contactno','$course_id','$student_reg_no','$st_photo','Active')";
$conn->query($sql);

$sql1="insert into login values('$student_reg_no','$student_reg_no','student','Enter Register Number','$student_reg_no','Active')";
$conn->query($sql1);
?>

<script>
alert("Successfully Registered");
document.location="student_view.php";
</script>
<?php

}
?>