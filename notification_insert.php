<?php
include('db_connect.php');
$news_title=$_POST['newstitle'];
$news_discription=$_POST['newsdis'];
$news_date=$_POST['newsdate'];

$sql="insert into notification values(null,'$news_title','$news_discription','$news_date')";
$conn->query($sql);
?>
<script>
alert("values are inserted");
document.location="notification_view.php";
</script>