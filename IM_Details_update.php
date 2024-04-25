<?php 
include('db_connect.php');
$internal_exam_id=$_POST['iaid'];
$student_id=$_POST['stuid'];
$subject_id=$_POST['subid'];
$exam_total_marks=$_POST['examtotalmarks'];
$obtain_marks=$_POST['obtainmarks'];
$int_marks_details_id=$_POST['int_marks_details_id'];

$sql="update  int_marks_details set int_exam_id='$internal_exam_id',student_id='$student_id',
sub_id='$subject_id',exam_total_marks='$exam_total_marks',obtain_marks='$obtain_marks'
where int_marks_details_id='$int_marks_details_id'";
$conn->query($sql); 
?>
<script>
alert("data updated successfully");
document.location="IM_Details_view.php";
</script>