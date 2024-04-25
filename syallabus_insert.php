<?php
include('db_connect.php');
$syallabus_name=$_POST['syallabusname'];
$subject_id=$_POST['subid'];
//$syacopyatta=$_POST['syacopyatta'];

$syacopyatta=$_FILES['syacopyatta']['name'];
$tmp_location=$_FILES['syacopyatta']['tmp_name'];
$target="../attached/syllabus/".$syacopyatta;
move_uploaded_file($tmp_location,$target);

$sql="insert into syllabus_details values(null,'$syallabus_name','$subject_id','$syacopyatta')";
$conn->query($sql);

?>
<script>
alert("values are inserted");
document.location="syallabus_view.php";
</script>
