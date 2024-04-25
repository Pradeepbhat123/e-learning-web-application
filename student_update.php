<?php
include('db_connect.php');
$fullname=$_POST['fullname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$addaress=$_POST['addaress'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
$gender=$_POST['gender'];
$contactno=$_POST['contactno'];
$student_reg_no=$_POST['sturegno'];
$student_photo=$_POST['stuph'];
$student_status=$_POST['stustatus'];
$student_id=$_POST['student_id'];


 $sql="update student_details set student_fullname='$fullname',date_of_birth='$dob',gender='$gender',address='$address',city='$city',pincode='$pincode',email_id='$emailid',contact_no='$contactno',student_reg_no='$student_reg_no',student_photo='$student_photo',student_status='$student_status' where student_id='$student_id'";
$conn->query($sql); 
?>
<script>
alert("data updated succesfully");
document.location="student_view.php";
</script>