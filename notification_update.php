<?php
include('db_connect.php');
$news_title=$_POST['newstitle'];
$news_discription=$_POST['newsdis'];
$news_date=$_POST['newsdate']; 
$notification_id=$_POST['notification_id'];

$sql="update notification set notification_title='$news_title',notification_discription='$news_discription',notification_date='$news_date' where notification_id='$notification_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="notification_view.php";
</script>