
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
$question_paper_id=$_REQUEST['question_paper_id'];
$sql="select * from question_paper where question_paper_id='$question_paper_id'";
$res=$conn->query($sql);
$row=mysqli_fetch_array($res); 
?>
<form action="QP_update.php" id="formID" method="post" enctype="multipart/form-data" name="form1">
<input type="hidden" name="question_paper_id" value="<?php echo $row['question_paper_id']; ?>">
  <table width="437" height="279" border="0" align="center">
    <tr>
      <td>Exam Name</td>
      <td><input name="ename" type="text" id="ename" class="form-control validate[required,custom[onlyLetter]] form-control" value="<?php echo $row['exam_name']; ?>"></td>
    </tr>
    <tr>
      <td>Subject ID</td>
      <td><select name="subid" id="subid" class="form-control validate[required] form-control">
        <option>select subject_id</option>
        <?php
	 
	  $sql1="select * from subject_details";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['sub_id']; ?>"<?php if($row1['sub_id']==$row['sub_id']) { ?> selected <?php } ?>> <?php echo $row1['sub_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Question Paper Attached File</td>
      <td><input name="qpattachedfile" type="file" id="form-control qpattachedfile form-control" required></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset"class="btn btn-danger btn">
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
