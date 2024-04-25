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
$facalaty_id=$_POST['facalaty_id'];

$sql="update facalaty_details set facalaty_fullname='$facalaty_fullname',gender='$gender',
qulification='$qulification',address='$address',city='$city',contact_no='$contact_no',
email_id='$email_id',date_of_joining='$date_of_joining' where facalaty_id='$facalaty_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="facalaty_view.php";
</script>