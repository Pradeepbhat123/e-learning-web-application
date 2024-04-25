<?php
include('db_connect.php');

if(!empty($_POST["course_id"])) {
	$sql ="SELECT * FROM  student_details sd,course_details cd WHERE sd.couse_id=cd.course_id and sd.couse_id = '" . $_POST["course_id"] . "'";
		$res=$conn->query($sql);
?>

	<option value="">Select Student</option>
<?php
	while($row=mysqli_fetch_array($res)) {
?>
	<option value="<?php echo $row["student_id"]; ?>"><?php echo $row["student_fullname"]; ?></option>
<?php
	}
	
}
?>