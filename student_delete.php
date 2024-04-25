<?php
include('db_connect.php');
$student_id=$_REQUEST['student_id'];
echo $sql="delete from student_details where student_id='$student_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="student_view.php";
</script>