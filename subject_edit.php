
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
$sub_id=$_REQUEST['sub_id'];
$sql="select * from subject_details where sub_id='$sub_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="subject_update.php">
<input type="hidden" name="sub_id" value="<?php echo $row['sub_id']; ?>">
  <table width="339" height="240" border="0" align="center">
    <tr>
      <td>Subject Name</td>
      <td><input name="subname" type="text" id="subname" class="validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['sub_name']; ?>"></td>
    </tr>
    <tr>
      <td>Course ID</td>
      <td><select name="courseid" id="courseid" class="validate[required] form-control">
        <option>select course_id</option>
        <?php

	  $sql1="select * from course_details";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  { 
	  ?>
        <option value="<?php echo $row1['course_id'];?>" <?php if($row1['course_id']==$row['course_id']){ ?> selected <?php } ?>><?php echo $row1['course_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Sem</td>
      <td><select name="sem" id="sem" class="validate[required] form-control">
        <option value="sems">sems</option>
        <option value="1st sem">1st sem</option>
        <option value="2nd sem">2nd sem</option>
        <option value="3rd sem">3rd sem</option>
        <option value="4th sem">4th sem</option>
        <option value="5th sem">5th sem</option>
        <option value="6th sem">6th sem</option>
      </select></td>
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
