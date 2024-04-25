<?php
include('db_connect.php');
$subject_id=$_POST['subid'];
$notes_title=$_POST['notesti'];
$notes_discription=$_POST['notesdis'];
$notes_attached_file=$_POST['attachedfile'];
$notes_attached_date=$_POST['attacheddate'];
$facalaty_id=$_POST['facid'];
$notes_id=$_POST['notes_id'];

$sql="update notes set sub_id='$subject_id',notes_title='$notes_title',facalaty_id='$facalaty_id',notes_discription='$notes_discription',notes_attached_file='$notes_attached_file',notes_attached_date='$notes_attached_date' where notes_id='$notes_id'";
$conn->query($sql);
?>
<script>
alert("data updated successfully");
document.location="notes_view.php";
</script>
