<?php
include('db_connect.php');
$facalaty_fullname=$_POST['facfullname'];
$gender=$_POST['gender'];
$qulification=$_POST['qulification'];
$address=$_POST['add'];
$city=$_POST['city'];
$contact_no=$_POST['contactno'];
$email_id=$_POST['emailid'];
$date_of_joining=$_POST['dateofjoin'];

$sql="insert into facalaty_details values(null,'$facalaty_fullname','$gender','$qulification','$address','$city','$contact_no','$email_id','$date_of_joining')";
$conn->query($sql);

$sql1="insert into login values('$email_id','123123','faculty','Enter Email-id','$email_id','Active')";
$conn->query($sql1);
?>
<script>
alert("values are inserted");
document.location="facalaty_view.php";
</script>