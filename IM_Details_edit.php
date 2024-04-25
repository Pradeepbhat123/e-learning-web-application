
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
$int_marks_details_id=$_REQUEST['int_marks_details_id'];
$sql="select * from  int_marks_details where int_marks_details_id='$int_marks_details_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>

<form name="form1" id="formID" method="post" action="IM_Details_update.php">
<input type="hidden" name="int_marks_details_id" value="<?php echo $row['int_marks_details_id']; ?>">
  <table width="377" height="285" border="0" align="center">
    <tr>
      <td>IA ID</td>
      <td><select name="iaid" id="iaid" class="form-control validate[required] form-control">
        <option value="">select internal_exam_id</option>
        <?php
	  
	  $sql1="select * from internal_exam";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['internal_exam_id']; ?>"<?php if($row1['internal_exam_id']==$row['internal_exam_id']) { ?> selected <?php } ?>> <?php echo $row1['internal_exam_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Student ID</td>
      <td><select name="stuid" id="stuid" class="form-control validate[required] form-control">
        <option value="">select student_id</option>
        <?php
	 
	  $sql2="select * from subject_details";
	  $res2=$conn->query($sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['sub_id']; ?>"<?php if($row2['student_id']==$row['student_id']) { ?> selected <?php } ?>><?php echo $row2['sub_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Subject ID</td>
      <td><select name="subid" id="subid" class="form-control validate[required] form-control">
        <option value="">select subject_id</option>
        <?php
	  
	  $sql3="select * from subject_details";
	  $res3=$conn->query($sql3);
	  while($row3=mysqli_fetch_array($res3))
	  {
	  ?>
        <option value="<?php echo $row3['sub_id']; ?>"<?php if($row3['sub_id']==$row['sub_id']) { ?> selected <?php } ?>><?php echo $row3['sub_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Exam Total Marks</td>
      <td><input name="examtotalmarks" type="text" id="examtotalmarks" class="form-control validate[required] form-control" value="<?php echo $row['exam_total_marks']; ?>"></td>
    </tr>
    <tr>
      <td>Obtain Marks</td>
      <td><input name="obtainmarks" type="text" id="obtainmarks" class="form-control validate[required] form-control" value="<?php echo $row['obtain_marks']; ?>"></td>
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

</html>

