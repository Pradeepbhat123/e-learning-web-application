
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
                                    <h1>Subject Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form name="form1" id="formID" method="post" action="subject_inserted.php">
  <table width="330" height="266" border="0" align="center">
    <tr>
      <td>Subject Name</td>
      <td><input name="subname" type="text" id="subname" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Course Name</td>
      <td><select name="courseid" id="courseid" class="validate[required] form-control">
	  <option value="">Select Course Name</option>
	  <?php
	  include('db_connect.php');
	  $sql="select * from course_details";
	  $res=$conn->query($sql);
	  while($row=mysqli_fetch_array($res))
	  { 
	  ?>
	  <option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
	
    <tr>
      <td>Semester</td>
      <td><select name="sem" id="sem" class="validate[required] form-control">
        <option value="">Select Semester</option>
        <option value="First">First</option>
        <option value="Second"> Second</option>
        <option value="Third"> Third</option>
        <option value="Fourth"> Fourth</option>
        <option value="Fifth"> Fifth</option>
        <option value="Sixth"> Sixth</option>
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
