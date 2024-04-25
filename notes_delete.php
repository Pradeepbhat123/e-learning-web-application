<?php
include('db_connect.php');
$notes_id=$_REQUEST['notes_id'];
$sql="delete from notes where notes_id='$notes_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="notes_view.php";
</script>