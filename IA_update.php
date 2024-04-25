<?php
include('db_connect.php');
$internal_exam_id=$_POST['internal_exam_id'];
$ia_name=$_POST['ianame'];
$ia_discription=$_POST['iadis'];


echo $sql="update internal_exam set internal_exam_name='$ia_name',internal_exam_discription='$ia_discription' 
where internal_exam_id='$internal_exam_id'";
$conn->query($sql); 

?>
<script>
alert("data updated successfully");
//document.location="IA_EXAM_view.php";
</script>