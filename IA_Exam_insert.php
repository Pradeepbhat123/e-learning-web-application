<?php
include('db_connect.php');
$ia_name=$_POST['ianame'];
$ia_discription=$_POST['iadis'];

$sql="insert into internal_exam values(null,'$ia_name','$ia_discription')";
$conn->query($sql);
?>
<script>
alert("Successfull");
document.location="IA_EXAM_view.php";
</script>