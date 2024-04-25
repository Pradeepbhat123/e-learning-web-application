<?php
include('db_connect.php');
$question_paper_id=$_REQUEST['question_paper_id'];
$sql="delete from question_paper where question_paper_id='$question_paper_id'";
$conn->query($sql);
?>
<script>
alert("values are deleted");
document.location="QP_view.php";
</script>