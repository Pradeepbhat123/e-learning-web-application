<?php
include('db_connect.php');
$exam_name=$_POST['ename'];
$subject_id=$_POST['subid'];
$qp_attached_file=$_POST['qp_attached_file'];
$question_paper_id=$_POST['question_paper_id'];

$sql="update question_paper set exam_name='$exam_name',sub_id='$subject_id',question_paper_attached_file='$qp_attached_file' where 	question_paper_id='$question_paper_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="QP_view.php";
</script>