<?php
include('db_connect.php');
$subject_id=$_POST['subid'];
$notes_title=$_POST['notesti'];
$notes_discription=$_POST['notesdis'];
//$notes_attached_file=$_POST['attachedfile'];
$notes_attached_date=$_POST['attacheddate'];
$facalaty_id=$_POST['facid'];

$attachedfile=$_FILES['attachedfile']['name'];
$tmp_location=$_FILES['attachedfile']['tmp_name'];
$target="../attached/notes/".$attachedfile;
move_uploaded_file($tmp_location,$target);

 $sql="insert into notes values(null,'$subject_id','$facalaty_id','$notes_title','$notes_discription','$attachedfile','$notes_attached_date')";
$conn->query($sql);
?>
<script>
alert("values are inserted");
document.location="notes_view.php";
</script>