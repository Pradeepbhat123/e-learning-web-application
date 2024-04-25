<?php
include('db_connect.php');
$student_id=$_POST['stuid'];
$facalaty_id=$_POST['facid'];
$subject=$_POST['sub'];
$discription=$_POST['dis'];
$mail_date=$_POST['maildate'];
//$status=$_POST['status'];

$sql="insert into mail values(null,'$student_id','$facalaty_id','$subject','$discription','$mail_date','Active')";
$conn->query($sql);
?>
<script>
alert("Mail Send");
document.location="mail_view.php";
</script>