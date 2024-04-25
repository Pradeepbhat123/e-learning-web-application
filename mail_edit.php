
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
$mail_id=$_REQUEST['mail_id'];
$sql="select * from mail where mail_id='$mail_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" id="formID" method="post" action="mail_update.php">
<input type="hidden" name="mail_id" value="<?php echo $row['mail_id']; ?>">
  <table width="433" height="339" border="0" align="center">
    <tr>
      <td>Student ID</td>
      <td><select name="stuid" id="stuid" class="form-control validate[required] form-control">
        <option value="">select student_id</option>
        <?php
	  
	  $sql1="select * from student_details";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['student_id']; ?>"<?php if($row1['student_id']==$row['student_id']) { ?> selected <?php } ?>> <?php echo $row1['student_fullname']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Facalaty ID</td>
      <td><select name="facid" id="facid" class="form-control validate[required] form-control">
        <option value="">select facalaty_id</option>
        <?php
	 
	  $sql2="select * from facalaty_details";
	  $res2=$conn->query($sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['facalaty_id']; ?>"<?php if($row2['facalaty_id']==$row['facalaty_id']) { ?> selected <?php } ?>> <?php echo $row2['facalaty_fullname']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><input name="sub" type="text" id="sub" class="form-control validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['subject']; ?>"></td>
    </tr>
    <tr>
      <td>Discription</td>
      <td><input name="dis" type="text" id="dis" class="form-control validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['discription']; ?>"></td>
    </tr>
    <tr>
      <td>Mail Date</td>
      <td><input name="maildate" type="date" id="maildate" class="form-control validate[required,custom[date]] form-control" value="<?php echo $row['mail_date']; ?>"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" class="form-control validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['status']; ?>"></td>
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



