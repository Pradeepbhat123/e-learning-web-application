<?php
include('db_connect.php');
$notification_id=$_REQUEST['notification_id'];
$sql="delete from notification where notification_id='$notification_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="notification_view.php";
</script>