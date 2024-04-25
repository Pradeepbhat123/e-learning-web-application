<?php
include('db_connect.php');
$internal_exam_id=$_REQUEST['internal_exam_id'];
$sql="delete from internal_exam where internal_exam_id='$internal_exam_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="IA_EXAM_view.php";
</script>