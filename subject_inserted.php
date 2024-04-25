<?php
include('db_connect.php');
$subject_name=$_POST['subname'];
$course_id=$_POST['courseid'];
$sem=$_POST['sem'];

$sql="insert into subject_details values(null,'$subject_name','$course_id','$sem')";
$conn->query($sql);
?>
<script>
alert("values are inserted");
document.location="subject_view.php";
</script>