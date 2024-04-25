<?php
include('db_connect.php');
$internal_exam_id=$_POST['iaid'];
$student_id=$_POST['stuid'];
$subject_id=$_POST['subid'];
$exam_total_marks=$_POST['examtotalmarks'];
$obtain_marks=$_POST['obtainmarks'];

echo $sql="insert into int_marks_details values(null,'$internal_exam_id','$student_id','$subject_id','$exam_total_marks','$obtain_marks')";
$conn->query($sql);
?>
<script>
alert("values are inserted");
document.location="IM_Details_view.php";
</script>
