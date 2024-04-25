<?php
include('db_connect.php');
$int_marks_details_id=$_REQUEST['int_marks_details_id'];
$sql="delete from int_marks_details where int_marks_details_id='$int_marks_details_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="IM_Details_view.php";
</script>