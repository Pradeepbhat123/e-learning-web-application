<?php
include('db_connect.php');
$subject_name=$_POST['subname'];
$course_id=$_POST['courseid'];
$sem=$_POST['sem'];
$sub_id=$_POST['sub_id'];

 $sql="update subject_details set sub_name='$subject_name',course_id='$course_id',sem='$sem' where sub_id='$sub_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="subject_view.php";
</script>