<?php
include('db_connect.php');
$exam_name=$_POST['ename'];
$subject_id=$_POST['subid'];
$qpattachedfile=$_POST['qpattachedfile'];

$qpattachedfile=$_FILES['qpattachedfile']['name'];
$tmp_location=$_FILES['qpattachedfile']['tmp_name'];
$target="../attached/qp/".$qpattachedfile;
move_uploaded_file($tmp_location,$target);

$sql="insert into question_paper values(null,'$exam_name','$subject_id','$qpattachedfile')";
$conn->query($sql);
?>
<script>
alert("vales are inserted");
document.location="QP_view.php";
</script>
