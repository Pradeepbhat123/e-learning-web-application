
<!doctype html>
<html class="no-js" lang="">


<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include('sidebar.php'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
 <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
           <?php include('mobile_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
               
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Course Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php include('val.php'); ?>
<?php
include('db_connect.php');
$student_id=$_REQUEST['student_id'];
$sql="select * from student_details where student_id='$student_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>
<form action="student_update.php" id="formID" method="post" name="form1">
<input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
  <table width="571" height="653" border="0" align="center">
    <tr>
      <td>Student Fullname</td>
      <td><input name="fullname" type="text" id="fullname" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['student_fullname']; ?>"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="dob" type="date" id="dob" class="validate[required,custom[data]] form-control" value="<?php echo $row['date_of_birth']; ?>"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>Male
        <input name="gender" type="radio" value="male" class="validate[required] "> 
        Female
        <input name="gender" type="radio" value="female" class="validate[required]"> </td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="addaress" type="text" id="addaress" class="validate[required] form-control" value="<?php echo $row['address']; ?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" class="validate[required] form-control" value="<?php echo $row['city']; ?>"></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><input name="pincode" type="text" id="pincode" class="validate[required] form-control" value="<?php echo $row['pincode']; ?>"></td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required] form-control" value="<?php echo $row['email_id']; ?>"></td>
    </tr>
    <tr>
      <td>Contact No</td>
      <td><input name="contactno" type="text" id="contactno" class="validate[required] form-control" value="<?php echo $row['contact_no']; ?>"></td>
    </tr>
    <tr>
      <td>Student Reg No</td>
      <td><input name="sturegno" type="text" id="sturegno" class="validate[required] form-control" value="<?php echo $row['student_reg_no']; ?>"></td>
    </tr>
    <tr>
      <td>Student Photo</td>
      <td><input name="stuph" type="file" id="stuph" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Student Status</td>
      <td><input name="stustatus" type="text" id="stustatus" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['student_status']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
<?php include('footer.php'); ?>
<?php include('val.php'); ?>
</body>

