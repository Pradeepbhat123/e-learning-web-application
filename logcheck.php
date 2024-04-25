<?php session_start();?>
<?php


$user_name=$_REQUEST['user_name'];
$password=$_REQUEST['password'];

include('db_connect.php');
echo $sql="select * from  login where username='$user_name' and password='$password'";
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['type'];
$_SESSION['uname']=$user_name;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="faculty")
{
header('location:faculty/home.php');
}
else if($type=="student")
{
header('location:student/home.php');
}

}
else
{
?>
<script>
alert("Invalid Username Or Password");
//document.location="index.html";
history.back();
</script>
<?php
}

?>

