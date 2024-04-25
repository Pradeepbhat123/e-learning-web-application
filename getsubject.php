<?php
include('db_connect.php');
 
$course_id=$_REQUEST["course_id"];
$sem=$_REQUEST["sem"];
//$semester=$_REQUEST["semester"];
if(!empty($_REQUEST["course_id"])) {
	$sql ="SELECT * FROM   subject_details sd,course_details cd where sd.course_id=cd.course_id and cd.course_id='$course_id' and sd.sem='$sem'  ";
		$res=$conn->query($sql);
?>

	<option value="">Select Subject  </option>
<?php
	while($row=mysqli_fetch_array($res)) {
?>
	<option value="<?php echo $row["sub_id"]; ?>"><p><?php echo $row["sub_name"]; ?></p></option>
<?php
	}
	
}
?>