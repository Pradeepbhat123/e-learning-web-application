<?php
include('db_connect.php');
$syllabus_id=$_REQUEST['syllabus_id'];
$sql="delete from syllabus_details where syllabus_id='$syllabus_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="syallabus_view.php";
</script>