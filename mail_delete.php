<?php
include('db_connect.php');
$mail_id=$_REQUEST['mail_id'];
$sql="delete from mail where mail_id='$mail_id'";
$conn->query($sql);
?>

<script>
alert("values are deleted");
document.location="mail_view.php";

</script>