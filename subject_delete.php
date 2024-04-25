<?php
include('db_connect.php');
$sub_id=$_REQUEST['sub_id'];
$sql="delete from subject_details where sub_id='$sub_id'";
$conn->query($sql);
?>

<script>
alert("values are deleted");
document.location="subject_view.php";

</script>