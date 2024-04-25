<?php
include('db_connect.php');
$syallabus_name=$_POST['syallabusname'];
$subject_id=$_POST['subid'];
$syallabus_copy_attached=$_POST['syacopyatta'];
$syllabus_id=$_POST['syllabus_id'];

 $sql="update  syllabus_details set syllabus_name='$syallabus_name',sub_id='$subject_id',syllabus_copy_attached='$syallabus_copy_attached' where syllabus_id='$syllabus_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="syallabus_view.php";
</script>