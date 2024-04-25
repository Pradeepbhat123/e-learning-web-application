
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
                                    <h1>Facalaty Details</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form name="form1" id="formID" method="post" action="facalaty_insert.php">
  <table width="435" height="388" border="0" align="center">
    <tr>
      <td><strong>Facalaty Fullname</strong></td>
      <td><input name="facfullname" type="text" id="facfullname" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Gender</strong></td>
      <td>Male
      <input name="gender" type="radio" value="male" class="validate[required,custom[onlyLetter]]">
     Female
      <input name="gender" type="radio" value="female" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>Qulification</strong></td>
     <td><input name="qulification" type="text" id="qulification" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td> <textarea name="add" id="add" class="validate[required,custom[onlyLetter]] form-control"></textarea></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td> <input name="city" type="text" id="city" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Contact No</strong></td>
      <td> <input name="contactno" type="text" id="contactno" class="validate[required,custom[onlyNumber]] form-control"></td>
    </tr>
    <tr>
      <td><strong>Email-ID</strong></td>
      <td> <input name="emailid" type="text" id="emailid" class="validate[required] form-control"></td>
    </tr>
    <tr>
      <td><strong>Date Of Joining</strong></td>
      <td> <input name="dateofjoin" type="date" id="dateofjoin" class="validate[required] form-control"></td>
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
