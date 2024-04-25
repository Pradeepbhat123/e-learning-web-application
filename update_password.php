<?php 
include('../db_connect.php');
$user_name=$_POST['user_name'];
$password=$_POST['pass'];
$sql="update  login set password='$password' where username='$user_name' ";
$conn->query($sql);
?>
<script>
alert('Succefully Forgot password ');
document.location="index.php";
</script>