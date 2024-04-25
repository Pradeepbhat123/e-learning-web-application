<?php
include('db_connect.php');
$student_id=$_POST['stuid'];
$facalaty_id=$_POST['facid'];
$subject=$_POST['sub'];
$discription=$_POST['dis'];
$mail_date=$_POST['maildate'];
$status=$_POST['status'];
$mail_id=$_POST['mail_id'];

echo $sql="update mail set student_id='$student_id',facalaty_id='$facalaty_id',subject='$subject',discription='$discription',
mail_date='$mail_id',status='$status' where mail_id='$mail_id'";
$conn->query($sql); 
?>
<script>
alert("data updated successfully");
document.location="mail_view.php";
</script>