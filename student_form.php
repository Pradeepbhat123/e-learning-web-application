
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
                                    <h1>Studen Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form action="student_insert.php" id="formID" enctype="multipart/form-data" method="post" name="form1">
  <table width="562" height="638" border="0" align="center">
    <tr>
      <td>Student Fullname</td>
      <td><input name="fullname" type="text" id="fullname" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input name="dob" type="date" id="dob" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>Male
        <input name="gender" type="radio" value="male" class="validate[required,custom[onlyLetter]]"> 
        Female
        <input name="gender" type="radio" value="female" class="validate[required,custom[onlyLetter]]"> </td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="addaress" id="addaress" class="validate[required,custom[onlyLetter]] form-control"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><input name="pincode" type="text" id="pincode" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Contact No</td>
      <td><input name="contactno" type="text" id="contactno" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><select name="course_id" id="course_id" class="validate[required] form-control"  >
        <option value=""> Select Course</option>
        <?php
	  include('db_connect.php');
	  $sql1="select * from  course_details";
	  $res1=$conn->query($sql1);
	  while($row1=mysqli_fetch_array($res1))
	  {
	  ?>
        <option value="<?php echo $row1['course_id']; ?>"><?php echo $row1['course_name']; ?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Student Reg No</td>
      <td><input name="sturegno" type="text" id="sturegno" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td>Student Photo</td>
      <td><input name="st_photo" type="file" id="st_photo" required form-control></td>
    </tr>
    
    
    <tr>
      <td colspan="2"><p>&nbsp;
      </p>        <p>&nbsp;        </p>        <div align="center">
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
